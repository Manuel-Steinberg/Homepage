<div class="share no-print">
    <div class="share-container">
        <div>
            <a class="share-button share-button-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url(); ?>&t=<?php echo $page->title(); ?>" target="_blank" title="Share on Facebook">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
        </div>
        <div>
            <a class="share-button share-button-twitter" href="https://twitter.com/intent/tweet?source=<?php echo $page->url(); ?>&text=<?php echo $page->url(); ?>" target="_blank" title="Tweet">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
        <div class="share-button-hide-md share-button-hide-lg share-button-hide-xl">
            <a class="share-button share-button-whatsapp" href="whatsapp://send?text=<?php echo $page->url(); ?>" target="_blank" title="Share on WhatsApp">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>
        </div>
        <div class="share-button-hide-xs share-button-hide-sm">
            <a class="share-button share-button-google-plus" href="https://plus.google.com/share?url=<?php echo $page->url(); ?>" target="_blank" title="Share on Google+">
                <i class="fa fa-google-plus" aria-hidden="true"></i>
            </a>
        </div>
        <div class="share-button-hide-xs share-button-hide-sm">
            <a class="share-button share-button-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $page->url(); ?>&title=<?php echo $page->title(); ?>&summary=&source=<?php echo $site->url(); ?>" target="_blank" title="Share on LinkedIn">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
        </div>
        <div class="share-button-hide-xs share-button-hide-sm">
            <a class="share-button share-button-xing" href="https://www.xing.com/spi/shares/new?url=<?php echo $page->url(); ?>" target="_blank" title="Share on Xing">
                <i class="fa fa-xing" aria-hidden="true"></i>
            </a>
        </div>
        <div>
            <a class="share-button share-button-envelope pure-hidden-xs pure-hidden-sm" href="mailto:?subject=<?php echo $page->title(); ?>&body=<?php echo $page->url(); ?>" target="_blank" title="Send Email">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</div>