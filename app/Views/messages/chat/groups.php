<?php if ($groups) { ?>
    <div id="js-chat-groups-list">
        <?php
        foreach ($groups as $group) {
            ?>
            <div class="message-row js-message-row-of-<?php echo $page_type; ?>" data-id="<?php echo $group->id; ?>" data-index="1" data-reply="">
                <div class="d-flex">
                    <div class="flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee icon-18 me-2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                    </div>
                    <div class="w-100 ps-2">
                        <div class="mb5">
                            <strong> <?php echo $group->group_name; ?></strong>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
<?php } else { ?>
    <div class="chat-no-messages text-off text-center">
        <i data-feather="frown" height="4rem" width="4rem"></i><br />
        <?php echo app_lang("no_groups_found"); ?>
    </div>
<?php } ?>

<div class='clearfix p10 b-b'>
    <?php echo modal_anchor(get_uri("messages/groups_modal_form/"), "<i data-feather='plus-circle' class='icon-16'></i> " . app_lang("new_group"), array("class" => "btn btn-default col-md-12 col-sm-12 col-xs-12", "title" => app_lang('new_group'))); ?>
</div>

