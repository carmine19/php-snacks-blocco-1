<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #323232;
        }

        h1 {
            color: #fff;
        }
        .box-post {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            margin-bottom : 100px;
        }

        .card {
            margin-top: 20px;
        }
    </style>

    <title>Snack3</title>
    </head>
    <body>
       
    <?php foreach( $posts as $key => $ele_corrente) { ?>
        <div class="box-post">
            <h1>Data : <?php echo $key ?></h1>

            <?php foreach ($ele_corrente as $key2) { ?>
            <div class="card" style="width: 18rem;">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $key2['title'] ?></h5>
                    <p class="card-text"><?php echo $key2['author'] ?></p>
                    <p class="card-text"><?php echo $key2['text'] ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <?php } ?>
        </div>
    <?php } ?>

    </body>
</html>

