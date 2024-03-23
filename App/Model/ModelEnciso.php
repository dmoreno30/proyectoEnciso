<?php

namespace Asesores\Model;



class ModelEnciso
{
    protected function GETAPI($url, $jsonData)
    {

        $headers = $this->headers();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); // Configurar método PUT
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($jsonData)); // Establecer datos a enviar
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // Establecer cabeceras
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Habilitar devolución de respuesta como string

        // Ejecutar la solicitud y obtener la respuesta
        $response = curl_exec($ch);

        // Verificar si hubo errores
        if (curl_errno($ch)) {
            echo 'Error al realizar la solicitud: ' . curl_error($ch);
        } else {
            // Procesar la respuesta
            //$responseData = json_decode($response, true);
            //var_dump($responseData); Imprimir la respuesta
            return $response;
        }
        curl_close($ch);
    }
    private function headers()
    {
        return $headers = [
            'Content-Type: application/json', // Indica que el cuerpo de la solicitud es JSON
            'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJodHRwOi8vc2NoZW1hcy54bWxzb2FwLm9yZy93cy8yMDA1LzA1L2lkZW50aXR5L2NsYWltcy9uYW1lIjoiQml0cml4MjQiLCJleHAiOjE3MzE2MDc1MzgsImlzcyI6Imh0dHBzOi8vbG9jYWxob3N0OjcxNjkvIiwiYXVkIjoiVmVudGFzQVBJIn0.40zbowB49NKwgCkivFQdVBIQoJfqa0RKD6ltoc_pvKE' // Bearer Token
        ];
    }
}
