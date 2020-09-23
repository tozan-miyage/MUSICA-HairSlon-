<section class="comments">
    <?php
    $comment_form_args = array(
        'title_reply' => 'コメント投稿フォーム',
    );
    comment_form($comment_form_args); //コメントフォームを表示する
    if (have_comments()) :
    ?>
        <p><?php comments_number('コメントはありません', 'コメントが１件あります。', 'コメントが%件あります。'); //コメント数とテキストを表示
            ?></p>
        <ol class="commentlist">
            <?php
            $wp_list_comments_args = array(
                'avatar_size' => '70' //アバターサイズを変更32px→50px
            );
            wp_list_comments($wp_list_comments_args); //コメントの一覧を表示 
            ?>
        </ol>
    <?php
        $paginate_comments_links_args = array(
            'prev_text' => '←前のコメントページ',
            'next_text' => '次のコメントページ→'
        );
        paginate_comments_links($paginate_comments_links_args); //分割されたページリストを表示
    endif;
    ?>
</section>