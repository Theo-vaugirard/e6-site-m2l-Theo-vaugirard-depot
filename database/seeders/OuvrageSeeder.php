<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ouvrage;

class OuvrageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ouvrage::insert([
            ['cote' => 1, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Maman Dlo contre la fée Carabosse', 'anneeParution' => 1981, 'type' => 'theatre-conte', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()   ],
            ['cote' => 2, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Au temps de l\'antan', 'anneeParution' =>  1988, 'type' => 'conte', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 3, 'auteur' => 'Alexandre Dumas', 'titre' => 'Les Trois Mousquetaires', 'anneeParution' => 1844, 'type' => 'roman', 'urlImage' => 'images/couvertures/trois_mousquetaires.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 4, 'auteur' => 'Voltaire', 'titre' => 'Candide', 'anneeParution' => 1759, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 5, 'auteur' => 'André Gide', 'titre' => 'Les Faux-monnayeurs', 'anneeParution' => 1925, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 6, 'auteur' => 'Gustave Flaubert', 'titre' => 'Madame Bovary', 'anneeParution' => 1856, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 7, 'auteur' => 'Marcel Proust', 'titre' => 'À la recherche du temps perdu', 'anneeParution' => 1913, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 8, 'auteur' => 'Émile Zola', 'titre' => 'Germinal', 'anneeParution' => 1885, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 9, 'auteur' => 'Charles Dickens', 'titre' => 'Les Grandes Espérances', 'anneeParution' => 1860, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 10, 'auteur' => 'Herman Melville', 'titre' => 'Moby Dick', 'anneeParution' => 1851, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 11, 'auteur' => 'Fénelon', 'titre' => 'Télémaque', 'anneeParution' => 1699, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 12, 'auteur' => 'Honoré de Balzac', 'titre' => 'Eugénie Grandet', 'anneeParution' => 1833, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 13, 'auteur' => 'Georges Simenon', 'titre' => 'Maigret et la Pipe', 'anneeParution' => 1933, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 14, 'auteur' => 'Paul Valéry', 'titre' => 'Monsieur Teste', 'anneeParution' => 1896, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 15, 'auteur' => 'Jules Romain', 'titre' => 'Les Hommes de bonne volonté', 'anneeParution' => 1930, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 16, 'auteur' => 'Jules Verne', 'titre' => 'Vingt mille lieues sous les mers', 'anneeParution' => 1870, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 17, 'auteur' => 'Jean-Paul Sartre', 'titre' => 'La Nausée', 'anneeParution' => 1938, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 18, 'auteur' => 'Albert Camus', 'titre' => 'L\'Étranger', 'anneeParution' => 1942, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 19, 'auteur' => 'Françoise Sagan', 'titre' => 'Bonjour Tristesse', 'anneeParution' => 1954, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 20, 'auteur' => 'Julia Kristeva', 'titre' => 'La Révolution du langage poétique', 'anneeParution' => 1974, 'type' => 'essai', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 21, 'auteur' => 'Marcel Proust', 'titre' => 'Du côté de chez Swann', 'anneeParution' => 1913, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 22, 'auteur' => 'Gustave Flaubert', 'titre' => 'L\'Éducation sentimentale', 'anneeParution' => 1869, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 23, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Texaco', 'anneeParution' => 1992, 'type' => 'roman', 'urlImage' => 'texaco.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 24, 'auteur' => 'Pierre Choderlos de Laclos', 'titre' => 'Les Liaisons dangereuses', 'anneeParution' => 1782, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 25, 'auteur' => 'Patrick Chamoiseau', 'titre' => 'Les neuf consciences du Malfini', 'anneeParution' => 2009, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 26, 'auteur' => 'Raphael Confiant', 'titre' =>  'Jou baré', 'anneeParution' => 1977, 'type' => 'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 27, 'auteur' => 'Raphael Confiant', 'titre' =>  'Marisos', 'anneeParution' => 1987, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 28, 'auteur' => 'Raphael Confiant', 'titre' => 'Le nègre et l\'amiral', 'anneeParution' => 1988, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 29, 'auteur' => 'Nicolas de Chamfort', 'titre' => 'Maximes et pensées', 'anneeParution' => 1796, 'type' => 'essai', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 30, 'auteur' => 'Charles Baudelaire', 'titre' => 'Les Fleurs du mal', 'anneeParution' => 1857, 'type' => 'poésie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 31, 'auteur' => 'Stendhal', 'titre' => 'Le Rouge et le Noir', 'anneeParution' => 1830, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 32, 'auteur' => 'Molière', 'titre' => 'Tartuffe', 'anneeParution' => 1664, 'type' => 'théâtre', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 33, 'auteur' => 'Raphael Confiant', 'titre' => 'Brin d\'amour', 'anneeParution' => 2001, 'type' => 'roman', 'urlImage' => 'images/couvertures/brin_d_amour.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 34, 'auteur' => 'Raphael Confiant', 'titre' => 'Citoyens au-dessus de tout soupçon', 'anneeParution' => 2010, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 35, 'auteur' => 'Edouard Glissant', 'titre' =>  'La terre inquiète', 'anneeParution' => 1955, 'type' => 'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 36, 'auteur' => 'Edouard Glissant', 'titre' => 'Pays rêve, pays réel', 'anneeParution' => 1985, 'type' => 'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 37, 'auteur' => 'Edouard Glissant', 'titre' => 'La lézarde', 'anneeParution' => 1958, 'type' =>  'roman', 'urlImage' => 'images/couvertures/la_lezarde.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 38, 'auteur' => 'Edouard Glissant', 'titre' => 'Tout-monde', 'anneeParution' => 1995, 'type' =>  'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 39, 'auteur' => 'Edouard Glissant', 'titre' =>  'Ormerod', 'anneeParution' => 2003, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 40, 'auteur' => 'Edouard Glissant', 'titre' => 'Monsieur Toussaint', 'anneeParution' => 2003, 'type' => 'theatre', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 41, 'auteur' => 'Daniel Maximin', 'titre' => 'L\'isolé soleil', 'anneeParution' => 1981, 'type' =>  'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 42, 'auteur' => 'Daniel Maximin', 'titre' => 'L\'île et une nuit', 'anneeParution' => 2002, 'type' => 'roman', 'urlImage' => 'images/couvertures/l_ile_et_une_nuit','created_at' => now(), 'updated_at' => now()],
            ['cote' => 43, 'auteur' => 'Xavier Orville', 'titre' => 'Délice et le fromager', 'anneeParution' => 1977, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 44, 'auteur' => 'Xavier Orville', 'titre' =>  'Moi, Trésilien-Theodore Auguste', 'anneeParution' => 1996, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 45, 'auteur' => 'Xavier Orville', 'titre' => 'Le parfum des belles de nuit', 'anneeParution' =>  1996, 'type' => 'nouvelle', 'urlImage' => 'images/couvertures/le_parfum_des_belles_nuits.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 46, 'auteur' =>  'Gisèle Pineau', 'titre' => 'Un papillon dans la cité', 'anneeParution' =>  1992, 'type' => 'roman', 'urlImage' => 'images/couvertures/un_papillon_dans_la_cite.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 47, 'auteur' =>  'Gisèle Pineau', 'titre' => 'Mes quatre femmes', 'anneeParution' => 2007, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 48, 'auteur' =>  'Gisèle Pineau', 'titre' => 'Folie, aller simple: Journée ordinaires d\'une infirmière', 2010, 'type' => 'roman', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 49, 'auteur' => 'Joseph Zobel', 'titre' => 'Le soleil partagé', 'anneeParution' => 1964, 'type' => 'nouvelle', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 50, 'auteur' => 'Joseph Zobel', 'titre' => 'Et si la mer n\'etait pas bleue', 'anneeParution' => 1982, 'type' =>  'nouvelle', 'urlImage' => 'images/couvertures/et_si_la_mer_n_etait_pas_bleue.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 51, 'auteur' => 'Joseph Zobel', 'titre' => 'Le soleil m\'a dit', 'anneeParution' => 2002, 'type' =>  'poésie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 52, 'auteur' => 'AImé Césaire', 'titre' => 'Les armes miraculeuses', 'anneeParution' => 1946, 'type' => 'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 53, 'auteur' => 'AImé Césaire', 'titre' => 'Cadastre', 'anneeParution' => 1961, 'type' =>  'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 54, 'auteur' => 'AImé Césaire', 'titre' => 'Sept poèmes', 'anneeParution' => 2010, 'type' => 'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],
            ['cote' => 55, 'auteur' => 'Saint-John Perse', 'titre' => 'Eloges', 'anneeParution' => 1911, 'type' =>  'poesie', 'urlImage' => 'images/couvertures/eloges.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 56, 'auteur' => 'Saint-John Perse', 'titre' => 'Anabase', 'anneeParution' => 1924, 'type' => 'poesie', 'urlImage' => 'images/couvertures/anabase.jpg','created_at' => now(), 'updated_at' => now()],
            ['cote' => 57, 'auteur' => 'Saint-John Perse', 'titre' => 'Sécheresse', 'anneeParution' => 1974, 'type' => 'poesie', 'urlImage' => 'images/couvertures/livre.png','created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
