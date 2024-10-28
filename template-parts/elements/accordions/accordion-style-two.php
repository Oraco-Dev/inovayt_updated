<?php

$post_id = $args['post_id'];
$left_icon = $args['left_icon'];

?>

<?php
$accordionItemCount = 0; // Initialize the accordion item count

// Loop to check for existence of custom fields
while (get_post_meta($post_id, 'accordiontitle' . ($accordionItemCount + 1), true)) {
    $accordionItemCount++;
}

for ($i = 1; $i <= $accordionItemCount; $i++) {
    $titleField = 'accordiontitle' . $i;
    $contentField = 'accordioncontent' . $i;

    $accordionTitle = get_post_meta($post_id, $titleField, true);
$accordionContent = get_post_meta($post_id, $contentField, true);
    ?>
<div class="accordion__styletwo">
    <div class="accordion__styletwo-head <?php echo $headColour ?> light-blue">
        <div>
            <img src="<?php echo $accordionImage?>" />
            <h4 style="margin-bottom: 0px;">
                <?php echo $accordionTitle; ?>
            </h4>
        </div>
        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-plus-24.png"
            class="accordion__styletwo-head-img-open">
        <img src="https://www.inovayt.com.au/wp-content/uploads/2024/07/icons8-minus-24.png"
            class="accordion__styletwo-head-img-close">
    </div>
    <div class="accordion__styletwo-content <?php echo $headColour ?>">
        <p style="margin-bottom: 0px;">
            <?php echo $accordionContent; ?>
        </p>
    </div>
</div>
<?php
}
?>