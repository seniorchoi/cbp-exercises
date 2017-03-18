<?php 

$books = array(
    array(
        'author' => 'Milo Yiannopoulos',
        'title' => 'Dangerous',
        'price' => '$15.62'
    ),
    array(
        'author' => 'Margaret Atwood',
        'title' => 'The Handmaid\'s Tale',
        'price' => '$8.69'
    ),
    array(
        'author' => 'George Orwell',
        'title' => '1984',
        'price' => '$7.09'
    ),
    array(
        'author' => 'Rupi Kaur',
        'title' => 'Milk and Honey',
        'price' => '$8.99'
    ),
    array(
        'author' => 'Neil Gaiman',
        'title' => 'Norse Mythology',
        'price' => '$15.57'
    )
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books</title>
</head>
<body>
    
    <table>
        <thead>
            <tr><th>Author</th><th>Title</th><th>Price</th></tr>
        </thead>
        <tbody>
            <?php foreach($books as $book) : ?>

                <tr>
                    <?php foreach($book as $data_item) : ?>
                        <td>
                            <?php echo $book['author']; ?>
                        </td>
                    <?php endforeach; ?>

                    <td>
                        <?php echo $book['author']; ?>
                    </td>
                    <td>
                        <?php echo $book['title']; ?>
                    </td>
                    <td>
                        <?php echo $book['price']; ?>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>