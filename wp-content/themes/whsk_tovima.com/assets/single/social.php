<div class="wrap-social-trigger mt-5">
    <div id="social-arg" class="is-relative allnews-call-action social-button">Share</div>
    <div class="social-box">
        <a onclick="window.open(this.href, 'mywin',
        'left=50,top=50,width=550,height=550,toolbar=1,resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
            <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.02,9.563l.467-3.077H7.568v-2A1.53,1.53,0,0,1,9.283,2.827h1.327V.208A16,16,0,0,0,8.255,0c-2.4,0-3.974,1.474-3.974,4.141V6.486H1.609V9.563H4.281V17H7.568V9.563Z" transform="translate(-1.609)" fill="#262626"/>
            </svg>
        </a>
        <a onclick="window.open(this.href, 'mywin',
        'left=20,top=20,width=550,height=550,toolbar=1,resizable=0'); return false;" href="https://twitter.com/intent/tweet?text=<?php echo (get_the_title()); ?>+<?php echo get_permalink(); ?>" target="_blank">
            <svg fill="#262626" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1">
            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"></path>
            </svg>
        </a>
        <a onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=550,height=550,toolbar=1,resizable=0'); return false;" class='linked-share share-butn' taget="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title(); ?>&summary=<?php echo get_the_excerpt(); ?>&source=tovima.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M4.029,18H.3V5.983H4.029ZM2.161,4.344A2.171,2.171,0,1,1,4.322,2.162,2.179,2.179,0,0,1,2.161,4.344ZM18,18H14.272V12.15c0-1.394-.028-3.182-1.94-3.182-1.94,0-2.238,1.515-2.238,3.082V18H6.367V5.983H9.946V7.622H10a3.921,3.921,0,0,1,3.531-1.941C17.306,5.682,18,8.169,18,11.4V18Z" transform="translate(0 -0.001)" fill="#262626"/>
            </svg>
        </a>
        <a href="https://www.facebook.com/dialog/send?app_id=723998868044315&link=<?php echo get_permalink();?>&redirect_uri=https://www.tovima.gr" id="messengerurl" class="messenger-share" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="17.999" height="18" viewBox="0 0 17.999 18">
            <path id="Icon_simple-messenger" data-name="Icon simple-messenger" d="M0,8.729A8.684,8.684,0,0,1,9,0a8.684,8.684,0,0,1,9,8.729,8.684,8.684,0,0,1-9,8.729,9.821,9.821,0,0,1-2.6-.345.72.72,0,0,0-.48.037l-1.792.787A.72.72,0,0,1,3.111,17.3l-.052-1.6a.727.727,0,0,0-.24-.51A8.541,8.541,0,0,1,0,8.729ZM6.238,7.087l-2.64,4.2a.423.423,0,0,0,.615.562L7.056,9.7a.529.529,0,0,1,.652,0l2.1,1.575a1.354,1.354,0,0,0,1.95-.36l2.64-4.2a.423.423,0,0,0-.615-.562L10.94,8.3a.518.518,0,0,1-.645,0L8.2,6.727a1.35,1.35,0,0,0-1.957.36Z" transform="translate(0.002)" fill="#262626"/>
            </svg>
        </a>
        <a rel="nofollow" class='whatsapp-color' href="https://api.whatsapp.com/send?text=<?php the_permalink();?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp" d="M15.3,4.866A8.923,8.923,0,0,0,1.266,15.629L0,20.25l4.729-1.242a8.893,8.893,0,0,0,4.263,1.085H9a9.005,9.005,0,0,0,9-8.92,8.955,8.955,0,0,0-2.7-6.308ZM9,18.591a7.4,7.4,0,0,1-3.777-1.033L4.95,17.4l-2.8.735L2.893,15.4l-.177-.281a7.428,7.428,0,1,1,13.777-3.942A7.5,7.5,0,0,1,9,18.591Zm4.066-5.553c-.221-.112-1.318-.651-1.523-.723s-.354-.112-.5.113-.575.723-.707.876-.261.169-.482.056a6.067,6.067,0,0,1-3.033-2.652c-.229-.394.229-.366.655-1.217a.413.413,0,0,0-.02-.39c-.056-.112-.5-1.209-.687-1.655s-.366-.374-.5-.382-.277-.008-.426-.008a.826.826,0,0,0-.595.277,2.5,2.5,0,0,0-.779,1.86A4.366,4.366,0,0,0,5.368,11.5a9.959,9.959,0,0,0,3.809,3.367,4.361,4.361,0,0,0,2.676.558,2.283,2.283,0,0,0,1.5-1.061,1.864,1.864,0,0,0,.129-1.061C13.432,13.2,13.283,13.146,13.062,13.038Z" transform="translate(0 -2.25)" fill="#262626"/>
            </svg>
        </a>
        <a target="_blank" href="https://telegram.me/share/url?url=<?php the_permalink();?>&text=<?php the_title();?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16">
            <path id="Icon_awesome-telegram-plane" data-name="Icon awesome-telegram-plane" d="M18.947,5.985,16.08,19.562c-.216.958-.78,1.2-1.582.745l-4.369-3.233L8.021,19.111a1.1,1.1,0,0,1-.878.43l.314-4.468,8.1-7.347c.352-.315-.076-.49-.547-.175L5,13.881.688,12.526c-.937-.294-.954-.941.2-1.393l16.856-6.52C18.519,4.319,19.2,4.788,18.947,5.985Z" transform="translate(-0.001 -4.528)" fill="#262626"/>
            </svg>
        </a>
    </div>
</div>