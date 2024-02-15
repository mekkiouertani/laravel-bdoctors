<?php

return [
    'users' => [
        [
            'name' => 'Alessandro',
            'surname' => 'Ferrari',
            'email' => 'alessandro.ferrari@example.com',
            'password' => 'sicuro1234',
        ],
        [
            'name' => 'Beatrice',
            'surname' => 'Ricci',
            'email' => 'beatrice.ricci@example.com',
            'password' => 'firenze2024',
        ],
        [
            'name' => 'Carlo',
            'surname' => 'Esposito',
            'email' => 'carlo.esposito@example.com',
            'password' => 'barisicura',
        ],
        [
            'name' => 'Daniela',
            'surname' => 'Conti',
            'email' => 'daniela.conti@example.com',
            'password' => 'contidani',
        ],
        [
            'name' => 'Emanuele',
            'surname' => 'Marino',
            'email' => 'emanuele.marino@example.com',
            'password' => 'sardegnalibera',
        ],
        [
            'name' => 'Francesca',
            'surname' => 'Greco',
            'email' => 'francesca.greco@example.com',
            'password' => 'genova2024',
        ],
        [
            'name' => 'Giovanni',
            'surname' => 'Mancini',
            'email' => 'giovanni.mancini@example.com',
            'password' => 'torino123',
        ],
        [
            'name' => 'Ilaria',
            'surname' => 'Costa',
            'email' => 'ilaria.costa@example.com',
            'password' => 'verona2024',
        ],
        [
            'name' => 'Luigi',
            'surname' => 'Barbieri',
            'email' => 'luigi.barbieri@example.com',
            'password' => 'bolognasicura',
        ],
        [
            'name' => 'Marta',
            'surname' => 'Fontana',
            'email' => 'marta.fontana@example.com',
            'password' => 'romaeterna',
        ],
    ],

    'accounts' => [
        [
            'image' => 'storage/images/doc-1.jpg',
            'cv' => '',
            'phone' => '3471234567',
            'address' => 'Via Napoli 100',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-2.jpg',
            'cv' => '',
            'phone' => '3397654321',
            'address' => 'Piazza del Mercato 22',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-3.jpg',
            'cv' => '',
            'phone' => '3456789012',
            'address' => 'Via Lazio 5',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-4.jpg',
            'cv' => '',
            'phone' => '3339876543',
            'address' => 'Corso Umberto I, 27',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-5.jpg',
            'cv' => '',
            'phone' => '3287654321',
            'address' => 'Viale Regina Margherita 8',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-6.jpg',
            'cv' => '',
            'phone' => '3401234567',
            'address' => 'Via Garibaldi 54',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-7.jpg',
            'cv' => '',
            'phone' => '3478901234',
            'address' => 'Piazza San Carlo 33',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-8.jpg',
            'cv' => '',
            'phone' => '3498765432',
            'address' => 'Via dei Mille 21',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-9.jpg',
            'cv' => '',
            'phone' => '3334567890',
            'address' => 'Via XX Settembre 12',
            'performances' => '',
            'visible' => 1,
        ],
        [
            'image' => 'storage/images/doc-10.jpg',
            'cv' => '',
            'phone' => '3281234567',
            'address' => 'Corso Vittorio Emanuele II, 58',
            'performances' => '',
            'visible' => 1,
        ],
    ],

    'specializations' => [
        [
            'name' => 'Odontoiatria',
        ],
        [
            'name' => 'Cardiologia',
        ],
        [
            'name' => 'Dermatologia',
        ],
        [
            'name' => 'Neurologia',
        ],
        [
            'name' => 'Pediatria',
        ],
        [
            'name' => 'Ortopedia',
        ],
        [
            'name' => 'Ginecologia',
        ],
    ],

    'sponsorships' => [
        [
            'name' => 'Giornaliero',
            'duration' => '24:00:00',
            'price' => '2.99',
            'image' => '',
        ],
        [
            'name' => 'Tre Giorni',
            'duration' => '72:00:00',
            'price' => '5.99',
            'image' => '',
        ],
        [
            'name' => 'Sei Giorni',
            'duration' => '144:00:00',
            'price' => '9.99',
            'image' => '',
        ],
    ],

    'ratings' => [
        [
            'value' => 1,
        ],
        [
            'value' => 2,
        ],
        [
            'value' => 3,
        ],
        [
            'value' => 4,
        ],
        [
            'value' => 5,
        ],
    ],

    'account_rating' => [
        [
            'account_id' => 1,
            'rating_id' => 1,
        ],
        [
            'account_id' => 2,
            'rating_id' => 3,
        ],
        [
            'account_id' => 3,
            'rating_id' => 5,
        ],
        [
            'account_id' => 4,
            'rating_id' => 2,
        ],
        [
            'account_id' => 5,
            'rating_id' => 1,
        ],
    ],

    'account_specialization' => [
        [
            'account_id' => 1,
            'specialization_id' => 2,
        ],
        [
            'account_id' => 2,
            'specialization_id' => 3,
        ],
        [
            'account_id' => 3,
            'specialization_id' => 4,
        ],
        [
            'account_id' => 4,
            'specialization_id' => 5,
        ],
        [
            'account_id' => 5,
            'specialization_id' => 6,
        ],
        [
            'account_id' => 6,
            'specialization_id' => 7,
        ],
        [
            'account_id' => 7,
            'specialization_id' => 2,
        ],
        [
            'account_id' => 8,
            'specialization_id' => 1,
        ],
        [
            'account_id' => 9,
            'specialization_id' => 2,
        ],
        [
            'account_id' => 10,
            'specialization_id' => 1,
        ],
    ],

    'account_sponsorship' => [
        [
            'account_id' => 1,
            'sponsorship_id' => 2,
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-16',
        ],
        [
            'account_id' => 2,
            'sponsorship_id' => 3,
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-18',
        ],
        [
            'account_id' => 2,
            'sponsorship_id' => 3,
            'start_date' => '2024-02-15',
            'end_date' => '2024-02-21',
        ],
    ],

    'messages' => [
        [
            'account_id' => 5,
            'name' => 'Mario Rossi',
            'content' => 'Vorrei prenotare una visita per domani',
            'title' => 'Visita Urgente',
            'email' => 'mariorossi@example.com',
        ],
        [
            'account_id' => 4,
            'name' => 'Enzo Bianchi',
            'content' => 'Il mio problema mi si è ripresentato',
            'title' => 'Problema al colon',
            'email' => 'enzo@example.com',
        ],
        [
            'account_id' => 2,
            'name' => 'Giovanna Rossi',
            'content' => 'Vorrei prenotare una visita il prima possibile',
            'title' => 'Visita di controllo',
            'email' => 'gi@example.com',
        ],
        [
            'account_id' => 6,
            'name' => 'Andrea Bruno',
            'content' => 'Vorrei prenotare una visita il prima possibile',
            'title' => 'Visita Funzionale',
            'email' => 'mariorossi@example.com',
        ],
        [
            'account_id' => 9,
            'name' => 'Alessandro Rossi',
            'content' => 'Mi serve un certificato medico per i prossimi 3 giorni ',
            'title' => 'Certificato Medico',
            'email' => 'alessandrolessandro@example.com',
        ],
    ],

    'reviews' => [
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 1,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 2,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 3,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 4,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 5,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 6,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 7,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 8,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 9,
        ],
        [
            'name' => 'Luca ravenna ',
            'title' => 'fa schifo sto medico',
            'email' => 'luca.ravenna@gmail.com',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam, voluptas ex natus laudantium in amet. Quos earum quibusdam blanditiis.',
            'account_id' => 10,
        ],
    ],
];
