<button id="fadein" style="display: none">fade in</button>

<?php foreach($games as $game) : ?>

    <div id="game_<?php echo $game->id; ?>" class="game">
        <div class="image">
            <img src="<?php echo $game->image_url; ?>" />
        </div>
        <div class="info">
            <h2 class="name"><?php echo $game->name; ?></h2>
            <div class="release">Released at: <?php echo $game->released_at; ?></div>
            <div class="genres">
                <?php foreach($genres_by_game[$game->id] as $genre) : ?>
                    <a href="#"><?php echo $genre->name; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="description">
                <?php echo $game->description; ?>
            </div>
            <div class="rating"><?php echo $game->rating; ?>%</div>        
        </div>
    </div>

<?php endforeach; ?>



<script>

$(document).ready(function(){

    // code here will be run only after the document is ready

});

$(function() {

    // code here will be run only after the document is ready

    $('h2:first'); // returns the jQuery object
    var headings = $('.game').find('h2');
    console.log(headings);

    // <div id="list"></div>
    var basic_element = document.getElementById('list');
    var jquery_selection = $('#list');
    // !!! basic_element != jquery_selection !!!

    var game_1_element = document.getElementById('game_1');
    var game_1_jquery = $('#game_1');

    console.log(game_1_element);
    console.log(game_1_jquery);

    // to retrieve the real HTML element from jquery selection
    var game_1_element_again = game_1_jquery[0];
    console.log(game_1_element_again);

    // to make a jquery object out of an HTML element
    var game_1_jquery_again = $(game_1_element);
    console.log(game_1_jquery_again);

    $('.game').slideUp(1000);
    $('#fadein').fadeIn(2000);

    $('#fadein').click(function(){
        $('.game').slideDown(1000);
        $('#fadein').fadeOut(2000);
    });


    $('.game .image img').click(function() {
        $(this).animate({
            width: '250px',
            opacity: '0.5'
        });
    });
});

</script>
