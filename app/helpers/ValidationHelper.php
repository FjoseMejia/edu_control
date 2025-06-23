<?php
namespace EduControl\helpers;

use EduControl\exceptions\ValidationException;

class ValidationHelper {
    public static function normalizeEmail(string $email): string {
        $email = strtolower(trim($email));
        $regex = '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/';

        if (!preg_match($regex, $email)) {
            throw new ValidationException("Digite un correo válido");
        }
        return $email;
    }
}


