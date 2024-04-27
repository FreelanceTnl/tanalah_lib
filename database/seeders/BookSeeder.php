<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File as FacadesFile;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chemin du fichier JSON
        $jsonPath = database_path('seeders/books_data.json');

        // Lire le fichier JSON
        $jsonContent = FacadesFile::get($jsonPath);

        // Décoder le contenu JSON en un tableau PHP
        $books = json_decode($jsonContent, true)['books'];
        // Insérer les données dans la base de données
        foreach ($books as $book) {
            $bookModel = Book::create([
                'title'=>$book['title'],
                'size'=>$book['size'],
                'thumbnail_link'=>$book['thumbnail_link'],
                'book_link'=>$book['book_link'],
                'publisher_id'=>1,
                'available'=>1
            ]); // Ou utiliser un autre modèle approprié
        }
    }
}
