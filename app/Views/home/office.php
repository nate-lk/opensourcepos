<?php
/**
 * @var array $allowed_modules
 */
?>

<?= view('partial/header') ?>

<script type="text/javascript">
    dialog_support.init("a.modal-dlg");
</script>

<h3 class="text-center"><?= lang('Common.welcome_message') ?></h3>

<section class="office_snapshot" aria-label="<?= esc(lang('Common.office_snapshot')) ?>">
    <strong><?= lang('Common.office_snapshot') ?></strong>
    <span><?= lang('Common.office_snapshot_modules', [count($allowed_modules)]) ?></span>
</section>

<div id="office_module_list">
    <?php foreach ($allowed_modules as $module) { ?>
        <div class="module_item" title="<?= lang("Module.$module->module_id" . '_desc') ?>">
            <a href="<?= base_url($module->module_id) ?>"><img src="<?= base_url("images/menubar/$module->module_id.svg") ?>" style="border-width: 0; height: 64px; max-width: 64px;" alt="Menubar Image"></a>
            <a href="<?= base_url($module->module_id) ?>"><?= lang("Module.$module->module_id") ?></a>
        </div>
    <?php } ?>
</div>

<?= view('partial/footer') ?>
