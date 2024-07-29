<?php 
/**
 * The filter. It receives the text of the <script> element prepared 
 * to be put in the page. It appends a <noscript> element after each <script>
 * element and returns the new string.
 *
 * @param string $tag
 * @return string
 */
function add_noscript_tag($tag)
{
    $noScript = <<<END
<noscript>
This functionality is implemented using Javascript.
</noscript>
END;

    return str_replace('</script>', '</script>'.$noScript, $tag);
}

// Hook it into WP
add_filter('script_loader_tag', 'add_noscript_tag');