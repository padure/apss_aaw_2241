<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;
use App\Models\Report;

class ReportController extends Controller
{
    protected array $categories = ['Network', 'Security', 'Software', 'Hardware'];

    /**
     * Show list of reports with search, category filter and sort
     */
    public function index(Request $request, Response $response): Response
    {
        $params = $request->getQueryParams();
        $search = trim($params['search'] ?? '');
        $category = trim($params['category'] ?? '');
        $sort = strtolower(trim($params['sort'] ?? 'desc'));
        $sort = ($sort === 'asc') ? 'asc' : 'desc';

        $query = Report::query();

        if ($search !== '') {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', '%' . $search . '%')
                  ->orWhere('author', 'like', '%' . $search . '%');
            });
        }

        if ($category !== '') {
            $query->where('category', $category);
        }

        $query->orderBy('created_at', $sort);

        // you can replace ->get() with ->paginate($perPage) if you add pagination later
        $reports = $query->get();

        // recent reports for sidebar
        $recentReports = Report::orderBy('created_at', 'desc')->limit(5)->get();

        return $this->render($response, 'reports/index', [
            'title' => 'Lista rapoartelor',
            'reports' => $reports,
            'query' => $params,
            'categories' => $this->categories,
            'recentReports' => $recentReports,
        ]);
    }

    /**
     * Show create form
     */
    public function create(Request $request, Response $response): Response
    {
        return $this->render($response, 'reports/create', [
            'title' => 'Creează raport',
            'categories' => $this->categories,
            'old' => [],
            'errors' => [],
        ]);
    }

    /**
     * Store a new report
     */
    public function store(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody() ?? [];

        $title = trim((string)($data['title'] ?? ''));
        $author = trim((string)($data['author'] ?? ''));
        $category = trim((string)($data['category'] ?? ''));
        $content = trim((string)($data['content'] ?? ''));

        $errors = [];

        if ($title === '') {
            $errors['title'] = 'Titlu obligatoriu';
        } elseif (mb_strlen($title) > 255) {
            $errors['title'] = 'Titlul trebuie să aibă maximum 255 caractere';
        }

        if ($author === '') {
            $errors['author'] = 'Autor obligatoriu';
        } elseif (mb_strlen($author) > 128) {
            $errors['author'] = 'Numele autorului prea lung';
        }

        if ($category === '' || !in_array($category, $this->categories, true)) {
            $errors['category'] = 'Categorie invalidă';
        }

        if ($content === '') {
            $errors['content'] = 'Conținutul raportului este obligatoriu';
        }

        if (!empty($errors)) {
            // Return create view with errors and previous inputs
            return $this->render($response, 'reports/create', [
                'title' => 'Creează raport',
                'categories' => $this->categories,
                'old' => $data,
                'errors' => $errors,
            ]);
        }

        // Create and save report
        $report = new Report();
        $report->title = $title;
        $report->author = $author;
        $report->category = $category;
        $report->content = $content;
        $report->save();

        // Redirect to reports list
        return $response
            ->withHeader('Location', '/reports')
            ->withStatus(302);
    }

    /**
     * Show single report details (optional)
     */
    public function show(Request $request, Response $response, array $args): Response
    {
        $id = $args['id'] ?? null;
        if (!$id) {
            return $response->withStatus(404);
        }

        $report = Report::find($id);
        if (!$report) {
            return $response->withStatus(404);
        }

        return $this->render($response, 'reports/show', [
            'title' => htmlspecialchars($report->title),
            'report' => $report,
        ]);
    }
}