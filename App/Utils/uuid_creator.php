<?php
function generarUUIDv4() {
    // Generar 16 bytes (128 bits) de forma aleatoria
    $data = random_bytes(16);

    // Establecer la versión a 0100 (UUIDv4)
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);

    // Establecer los bits 6 y 7 a 10 para indicar que se utiliza DCE 1.1 (RFC 4122)
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Convertir los bytes a una representación hexadecimal y formatear con guiones
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
