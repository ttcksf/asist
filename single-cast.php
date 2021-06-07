<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header-menu'); ?>
    <section class="cast-single">
        <div class="cast-single__inner inner wow fadeIn" data-wow-duration="4s">
            <div class="cast">
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <h1 class="cast__head"><?php the_title(); ?></h1><!-- /.cast__head -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="cast__img">
                    <?php if (has_post_thumbnail()) :
                        $id = get_post_thumbnail_id();
                        $img = wp_get_attachment_image_src($id, 'large');
                    else :
                        $img = array(get_template_directory_uri() . '/img/noimg.png');
                    endif;
                    ?>
                    <?php echo '<img src="' . esc_url($img[0]) . '">'; ?>
                </div><!-- /.cast__img -->
                <div class="SPACER--60"></div><!-- /.SPACER--60 -->
                <div class="cast__table">
                    <table class="cell">
                        <?php if (get_field('name')) : ?>
                            <?php $field = get_field_object('name'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('name'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('position')) : ?>
                            <?php $field = get_field_object('position'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('position'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('older')) : ?>
                            <?php $field = get_field_object('older'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('older'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('style')) : ?>
                            <?php $field = get_field_object('style'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('style'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('blood')) : ?>
                            <?php $field = get_field_object('blood'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('blood'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('job')) : ?>
                            <?php $field = get_field_object('job'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('job'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('from')) : ?>
                            <?php $field = get_field_object('from'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('from'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('birthday')) : ?>
                            <?php $field = get_field_object('birthday'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('birthday'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('tobaco')) : ?>
                            <?php $field = get_field_object('tobaco'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('tobaco'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('message')) : ?>
                            <?php $field = get_field_object('message'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('message'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('kind')) : ?>
                            <?php $field = get_field_object('kind'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('kind'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('food')) : ?>
                            <?php $field = get_field_object('food'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('food'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('point')) : ?>
                            <?php $field = get_field_object('point'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('point'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('color')) : ?>
                            <?php $field = get_field_object('color'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('color'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('mens')) : ?>
                            <?php $field = get_field_object('mens'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('mens'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('movie')) : ?>
                            <?php $field = get_field_object('movie'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('movie'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('place')) : ?>
                            <?php $field = get_field_object('place'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('place'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('book')) : ?>
                            <?php $field = get_field_object('book'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('book'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('caractor')) : ?>
                            <?php $field = get_field_object('caractor'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('caractor'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('present')) : ?>
                            <?php $field = get_field_object('present'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('present'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('holiday')) : ?>
                            <?php $field = get_field_object('holiday'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('holiday'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('howto')) : ?>
                            <?php $field = get_field_object('howto'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('howto'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('trip')) : ?>
                            <?php $field = get_field_object('trip'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('trip'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('drink')) : ?>
                            <?php $field = get_field_object('drink'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('drink'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('comedian')) : ?>
                            <?php $field = get_field_object('comedian'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('comedian'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('music')) : ?>
                            <?php $field = get_field_object('music'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('music'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                    <table class="cell">
                        <?php if (get_field('brand')) : ?>
                            <?php $field = get_field_object('brand'); ?>
                            <tr>
                                <th><?php echo $field['label']; ?></th>
                            </tr>
                            <tr>
                                <td><?php the_field('brand'); ?></td>
                            </tr>
                        <?php endif; ?>
                    </table><!-- /.cell -->
                </div><!-- /.cast__table -->
                <div class="SPACER--100 SP--NONE"></div><!-- /.SPACER--200 -->
                <div class="cast__button btn-large"><a href="<?php echo esc_url(home_url('/contact')); ?>">オンラインガールズバーの予約へ</a></div><!-- /.cast__button btn-large -->
                <div class="SPACER--200"></div><!-- /.SPACER-200 -->
            </div><!-- /.cast -->
        </div><!-- /.cast-single__inner -->
    </section><!-- /.cast-single -->
    <?php get_footer(); ?>

</body>

</html>