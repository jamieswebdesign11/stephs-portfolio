<?php 
$additionalOptions = get_field('additional_options', 'options');
$contactEmail = $additionalOptions['contact_email'];
?>
<footer>
    <div class="footer-inner">
        <?php echo $contactEmail ? '<div class="footer-container">Contact: <a href="mailto:'. $contactEmail .'" title="Contact Email" alt="Contact Email">'. $contactEmail .'</a></div>' : ''; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
