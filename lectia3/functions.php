<?php
    function logMessage (string $msg): void {
        echo $msg . ": " . date("Y-m-d H:i:s");
    }
    /**
     * TODO: Short description of the selected element (function, method, class, or file).
     *
     * Long description:
     * - Describe what the element does, its responsibilities, and any important behavior.
     * - Note side effects, concurrency considerations, and performance characteristics if relevant.
     * - Mention any external resources used (files, network, DB) and required preconditions.
     *
     * Parameters:
     * @param type $paramName Description of the parameter and expected type/constraints.
     * @param type $anotherParam Description of another parameter, allowed values and defaults.
     *
     * Return value:
     * @return type Description of the return value and possible edge cases (e.g., null on failure).
     *
     * Exceptions / Errors:
     * @throws ExceptionType When a specific error condition occurs and why.
     * @throws AnotherExceptionType For other error conditions and what callers should do.
     *
     * Examples:
     * Usage:
     * // show a concise usage example demonstrating typical input and expected output/behavior.
     *
     * Notes:
     * - Backward compatibility and versioning notes (@since).
     * - Any deprecation information (@deprecated) and recommended alternatives.
     * - References to related functions/classes (@see).
     *
     * Metadata:
     * @since 1.0.0
     * @author Your Name
     */
    function formatName(string $nume, string $prenume): string{
        if(empty($nume) || empty($prenume)){
            return "Date invalide!";
        }
        return ucfirst($nume) ." ". ucfirst($prenume);
    }
    