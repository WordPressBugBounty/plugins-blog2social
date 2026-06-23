<?php
if (!defined('ABSPATH')) {
    exit;
}
/**
 * @phpcs:disable WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
 */

wp_nonce_field('b2s_security_nonce', 'b2s_security_nonce');
/* Data */
require_once (B2S_PLUGIN_DIR . 'includes/B2S/Post/Filter.php');
require_once (B2S_PLUGIN_DIR . 'includes/Util.php');
require_once (B2S_PLUGIN_DIR . 'includes/Options.php');
$optionsCuration = new B2S_Options((int) B2S_PLUGIN_BLOG_USER_ID);
$optionPostFiltersCuration = $optionsCuration->_getOption('post_filters');
$postsPerPageCuration = (isset($optionPostFiltersCuration['postsPerPage']) && (int) $optionPostFiltersCuration['postsPerPage'] > 0) ? (int) $optionPostFiltersCuration['postsPerPage'] : 25;
$userLang = strtolower(substr(get_locale(), 0, 2));
$options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
$optionUserTimeZone = $options->_getOption('user_time_zone');
$userTimeZone = ($optionUserTimeZone !== false) ? $optionUserTimeZone : get_option('timezone_string');
$userTimeZoneOffset = (empty($userTimeZone)) ? get_option('gmt_offset') : B2S_Util::getOffsetToUtcByTimeZone($userTimeZone);
$selSchedDate = (isset($_GET['schedDate']) && !empty($_GET['schedDate'])) ? wp_date("Y-m-d H:i:s", (strtotime(sanitize_text_field(wp_unslash($_GET['schedDate'])) . ' ' . gmdate('H:i:s'))), new DateTimeZone(date_default_timezone_get())) : "";
$isImagePro = (B2S_PLUGIN_USER_VERSION < 2) ? ' <span class="label label-success">' . esc_html__('Pro', 'blog2social') . '</span>' : '';
?>
<div class="b2s-container">
    <div class="b2s-inbox">
        <div class="col-md-12 del-padding-left">
            <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/sidebar.php'); ?>
            <div class="col-md-9 del-padding-left del-padding-right">
                <!--Header|Start - Include-->
                <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/header.php'); ?>
                <!--Header|End-->
                <p class="b2s-page-subtitle b2s-color-grey"><?php esc_html_e('Create, customize, and share social media posts from your WordPress content or from any other source.', 'blog2social'); ?></p>
                <h1 id="b2s-curation-title-link" class="b2s-curation-title" style="display: none;"><?php esc_html_e('Share New Link Post', 'blog2social'); ?></h1>
                <h1 id="b2s-curation-title-text" class="b2s-curation-title" style="display: none;"><?php esc_html_e('Share New Text Post', 'blog2social'); ?></h1>
                <h1 id="b2s-curation-title-image" class="b2s-curation-title" style="display: none;"><?php esc_html_e('Share New Image Post', 'blog2social') . $isImagePro; ?></h1>
                <h1 id="b2s-curation-title-video" class="b2s-curation-title" style="display: none;"><?php esc_html_e('Share New Video Post', 'blog2social'); ?></h1>
                <input type="hidden" id="b2s-curation-post-format" value="2">

                <!--Compose Area|Start-->
                <!-- Collapsed bar: shown by default until user expands -->
                <div id="b2s-compose-collapsed-bar">
                    <div class="action-grid">
                        <button type="button" id="b2s-wordpress-expand-btn" class="btn b2s-compose-expand-btn action-card share-post-tab-active">
                            <div class="icon icon-green" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="24" height="24" fill="none"
                                    stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                                    <path d="M14 2v6h6"/>
                                    <path d="M8 13h8"/>
                                    <path d="M8 17h8"/>
                                    <path d="M8 9h3"/>
                                </svg>
                            </div>
                            <div class="content share-post-tab-content">
                                <h3><?php esc_html_e('Share existing WordPress content', 'blog2social'); ?></h3>
                                <p><?php esc_html_e('Select a post or page from your site to share', 'blog2social'); ?></p>
                            </div>
                        </button>
                        <button type="button" id="b2s-compose-expand-btn" class="btn b2s-compose-expand-btn action-card">
                            <div class="icon icon-blue" aria-hidden="true">
                                <svg viewBox="0 0 24 24" width="24" height="24" fill="none"
                                    stroke="currentColor" stroke-width="2.5"
                                    stroke-linecap="round">
                                    <path d="M12 5v14"/>
                                    <path d="M5 12h14"/>
                                </svg>
                            </div>
                            <div class="content share-post-tab-content">
                                <h3><?php esc_html_e('Create a new custom post', 'blog2social'); ?></h3>
                                <p><?php esc_html_e('Craft a social post from scratch using text, links, images, or video.', 'blog2social'); ?></p>
                            </div>
                        </button>
                    </div>
                </div>
                <!-- Full compose area: hidden by default -->
                <div class="b2s-curation-section-seperator"></div>
                <div id="b2s-compose-expand-area" style="display:none;">
                <div class="b2s-compose-outer">
                    <div class="b2s-compose-col-main">
                        <div class="panel panel-default b2s-compose-panel">
                            <div class="panel-body">

                                <!-- Alert messages (JS-controlled, kept for compatibility) -->
                                <div id="b2s-curation-no-review-info" class="alert alert-danger" style="display:none;">
                                    <span class="glyphicon glyphicon-remove glyphicon-danger"></span> <?php esc_html_e('No link preview available. Please check your link.', 'blog2social'); ?>
                                </div>
                                <div id="b2s-curation-no-auth-info" class="alert alert-danger" style="display:none;">
                                    <span class="glyphicon glyphicon-remove glyphicon-danger"></span> <?php esc_html_e('No connected networks. Please make sure to connect at least one social media account.', 'blog2social'); ?>
                                </div>
                                <div id="b2s-curation-no-data-info" class="alert alert-danger" style="display:none;">
                                    <span class="glyphicon glyphicon-remove glyphicon-danger"></span> <?php esc_html_e('Invalid data. Please check your data.', 'blog2social'); ?>
                                </div>
                                <div id="b2s-curation-saved-draft-info" class="alert alert-success" style="display:none;">
                                    <span class="glyphicon glyphicon-success glyphicon-ok"></span> <?php esc_html_e('Saved as draft.', 'blog2social'); ?>
                                </div>

                                <!-- Compose header row: avatar + label + save draft -->
                                <div class="b2s-compose-header">
                                    <div class="b2s-compose-header-left">
                                        <span class="b2s-compose-header-label"><?php esc_html_e('What do you want to share today?', 'blog2social'); ?></span>
                                    </div>
                                    <div class="b2s-compose-draft-actions">
                                        <button type="button" id="b2s-btn-compose-save-draft" class="btn btn-link b2s-compose-save-draft-link">
                                            <?php esc_html_e('Save draft', 'blog2social'); ?>
                                        </button>
                                        <button type="button" id="b2s-btn-load-draft" class="btn btn-link b2s-compose-load-draft-link">
                                            <?php esc_html_e('Load draft', 'blog2social'); ?>
                                        </button>
                                    </div>
                                </div>

                                <form id="b2s-curation-post-form" method="post">

                                    <!-- Loading spinner for compose area only (NOT .b2s-loading-area to avoid curation.js interference) -->
                                    <div class="b2s-compose-loading-area" style="display:none;">
                                        <br>
                                        <div class="b2s-loader-impulse b2s-loader-impulse-md"></div>
                                        <div class="clearfix"></div>
                                        <div class="text-center b2s-loader-text"><?php esc_html_e("Load data...", "blog2social"); ?></div>
                                    </div>

                                    <!-- Unified compose input -->
                                    <div class="b2s-compose-unified-input">
                                        <input
                                            type="text"
                                            id="b2s-compose-main-title"
                                            name="title"
                                            class="b2s-compose-main-title"
                                            placeholder="<?php esc_attr_e('Add a title (optional)', 'blog2social'); ?>"
                                        >
                                        <div class="b2s-compose-title-divider"></div>
                                        <div class="b2s-compose-textarea-wrap">
                                            <textarea
                                                id="b2s-compose-main-textarea"
                                                class="form-control b2s-compose-main-textarea b2s-post-item-details-item-message-input"
                                                name="comment"
                                                placeholder="<?php esc_attr_e('Write something, paste a link, or add an image...', 'blog2social'); ?>"
                                                rows="10"
                                            ></textarea>
                                            <button type="button" class="b2s-compose-emoji-inline-btn b2s-post-item-details-item-message-emoji-btn" title="<?php esc_attr_e('Emoji', 'blog2social'); ?>">
                                                <img src="<?php echo esc_url(plugins_url('/assets/images/b2s-emoji.png', B2S_PLUGIN_FILE)); ?>" width="16" height="16" alt="Emoji">
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Validation error messages -->
                                    <div id="b2s-error-text-empty" class="b2s-compose-error-msg" style="display:none; color:#F5365C;">
                                        <span class="glyphicon glyphicon-exclamation-sign" ></span> <?php esc_html_e('Please enter a message.', 'blog2social'); ?>
                                    </div>
                                    <div id="b2s-error-image-empty" class="b2s-compose-error-msg" style="display:none; color:#F5365C;">
                                        <span class="glyphicon glyphicon-exclamation-sign" ></span> <?php esc_html_e('Please add an image.', 'blog2social'); ?>
                                    </div>

                                    <!-- Hidden inputs for Form Submission  -->
                                    <div style="display:none;">
                                        <input type="hidden" class="b2s-image-url-hidden-field" value="" name="image_url">
                                        <input type="hidden" class="b2s-image-id-hidden-field" value="" name="image_id">
                                        <input type="hidden" id="b2s-curation-input-url" name="url" value="" ?>">
                                        <input type="hidden" name="b2s_user_timezone" value="<?php echo esc_attr($userTimeZoneOffset); ?>">
                                        <input type="hidden" id="b2s-post-curation-image-url" name="link_image_url" value="">
                                    </div>
                                   
                                    <!-- Toolbar row: Image / Video + Settings toggle -->
                                    <div class="b2s-compose-toolbar">
                                        <button type="button" class="btn btn-default btn-sm b2s-compose-toolbar-btn b2s-compose-direct-upload-btn" <?php if (B2S_PLUGIN_USER_VERSION < 2) { echo 'disabled'; } ?>>
                                            <i class="glyphicon glyphicon-picture"></i> <?php esc_html_e('Image', 'blog2social'); ?><?php echo wp_kses($isImagePro, array('span' => array('class' => array()))); ?>
                                        </button>
                                        <a href="<?php echo esc_url(admin_url('admin.php?page=blog2social-video')); ?>" class="btn btn-default btn-sm b2s-compose-toolbar-btn">
                                            <i class="glyphicon glyphicon-film"></i> <?php esc_html_e('Video', 'blog2social'); ?>
                                        </a>
                                        <div id="b2s-curation-network-group-wrap" style="display:none;">
                                            <i class="glyphicon glyphicon-user b2s-curation-network-select-glyphicon"></i>
                                            <select id="b2s-curation-preview-profile-select" class="form-control b2s-preview-network-group-select">
                                            </select>
                                            <i class="glyphicon glyphicon-chevron-down b2s-compose-settings-toggle-icon select-chevron"></i>

                                            <a class="b2s-preview-network-info-link" href="#" style="vertical-align: middle;"><i class="glyphicon glyphicon-question-sign"></i></a>
                                        </div>
                                        <button type="button" id="b2s-compose-settings-toggle" class="btn btn-default btn-sm b2s-compose-toolbar-btn b2s-compose-settings-toggle-btn">
                                            <i class="glyphicon glyphicon-cog"></i>
                                            <span id="b2s-compose-settings-toggle-label"><?php esc_html_e('Advanced settings', 'blog2social'); ?></span>
                                            <i class="glyphicon glyphicon-chevron-down b2s-compose-settings-toggle-icon"></i>
                                        </button>
                                        <div class="b2s-compose-toolbar-spacer"></div>
                                        <button type="button" id="b2s-btn-curation-customize" class="btn btn-primary btn-lg b2s-btn-curation-customize"><?php esc_html_e('Customize', 'blog2social'); ?></button>
                                        <button type="button" id="b2s-btn-curation-share" class="btn btn-success btn-lg b2s-btn-curation-share"><?php esc_html_e('Share', 'blog2social'); ?></button>
                                    </div>

                                    <!-- Settings panel (collapsible, closed by default) -->
                                    <div id="b2s-compose-settings-panel" style="display:none;">
                                        <!-- Send options: JS fills .b2s-curation-settings-area with ship-type dropdown + network group -->
                                        <div class="b2s-compose-send-options">
                                            <div class="b2s-curation-settings-area" style="display:none;"></div>
                                            <div class="b2s-compose-toggle-row">
                                                <label class="b2s-compose-toggle-wrap">
                                                    <input type="checkbox" name="apply_post_templates" value="1" class="b2s-compose-toggle-input b2s-curation-post-form-apply-post-templates-checkbox" id="b2s-apply-post-templates-toggle">
                                                    <span class="b2s-compose-toggle-slider"></span>
                                                </label>
                                                <span class="b2s-compose-toggle-label"><?php esc_html_e('Apply post templates', 'blog2social'); ?></span>
                                                <a href="<?php echo esc_url(B2S_Tools::getSupportLink('post_templates_without_highlight')); ?>" class="b2s-compose-info-link b2s-post-templates-info-trigger" target="_blank"><?php esc_html_e("What's this?", 'blog2social'); ?></a>
                                            </div>
                                        </div> 
                                    </div>

                                    <input type="hidden" id="b2s-draft-id" value="" name="b2s-draft-id">
                                    <textarea id="b2s-post-curation-comment-dummy" style="display:none;"></textarea>

                                </form>

                                <!-- Re-share area (JS-controlled) -->
                                <div class="row b2s-curation-post-list-area">
                                    <div class="b2s-curation-post-list"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Live preview column -->
                    <div class="b2s-compose-col-preview hidden-sm hidden-xs">
                        <div id="b2s-curation-preview" class="b2s-curation-preview">
                            <div class="panel panel-default b2s-compose-preview-panel">
                                <div class="panel-body">
                                    <div id="b2s-compose-link-status" style="display:none;">
                                        <span class="b2s-badge-link-detected">
                                            <i class="glyphicon glyphicon-link"></i>
                                            <?php esc_html_e('Link post detected', 'blog2social'); ?>
                                        </span>
                                        <span class="b2s-badge-image-detected" style="display:none;">
                                            <i class="glyphicon glyphicon-picture"></i>
                                            <?php esc_html_e('Image post detected', 'blog2social'); ?>
                                        </span>
                                        <span class="b2s-badge-text-detected" style="display:none;">
                                            <i class="glyphicon glyphicon-font"></i>
                                            <?php esc_html_e('Text post detected', 'blog2social'); ?>
                                        </span>
                                        <span id="b2s-compose-og-status" class="b2s-og-loaded-label" style="display:none;">
                                            <?php esc_html_e('OG preview loaded', 'blog2social'); ?>
                                        </span>
                                    </div>
                                    <p class="b2s-compose-preview-label"><?php esc_html_e('Live preview', 'blog2social'); ?></p>
                                    <div class="media">
                                        <div id="b2s-curation-preview-body-account-img" class="b2s-curation-preview-body-account-img">
                                            <div style="display: flex;">
                                                <img style="margin-bottom: 5px; margin-right: 5px; width: 20px;" class="media-object " src="<?php echo esc_url(plugins_url('/assets/images/b2s_icon_large.png', B2S_PLUGIN_FILE)); ?>" alt="Blog2Social">
                                                <h4 class="media-heading">
                                                    Blog2Social
                                                    <small><i><?php esc_html_e('now', 'blog2social'); ?></i></small>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="b2-preview-post-title" style="font-weight: bold; font-size: 18px; margin-bottom: 3px; margin-top: 3px;"></div>
                                            <div id="b2s-curation-preview-body-text" class="b2s-curation-preview-body-text">
                                                <?php esc_html_e('Write something...', 'blog2social'); ?>
                                            </div>
                                        </div>
                                        <div class="b2s-curation-link-preview" style="margin-top: 10px; border: 1px solid lightgray; display:none;">
                                            <div>
                                                <div style="position:relative;display:inline-block;width:100%;">
                                                    <img src="<?php echo esc_url(plugins_url('/assets/images/no-image.png', B2S_PLUGIN_FILE)); ?>" class="img-responsive b2s-curation-link-preview-image" alt="Link-Preview" style="display:none;">
                                                    <button id="b2s-preview-image-remove-btn" type="button" class="b2s-preview-image-remove-btn" style="display:none;" title="<?php esc_attr_e('Remove image', 'blog2social'); ?>">&times;</button>
                                                </div>
                                                <div style="margin-top: 5px; margin-left: 5px; margin-bottom: 5px;">
                                                    <strong style="margin-top: 3px;" class="b2s-curation-link-preview-title"></strong><br>
                                                    <small class="b2s-curation-link-preview-description"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer" style="background-color: #fff;">
                                    <div class="row text-center text-muted">
                                        <div class="col-xs-4"><i class="glyphicon glyphicon-thumbs-up"></i> <?php esc_html_e('Like', 'blog2social'); ?></div>
                                        <div class="col-xs-4"><i class="glyphicon glyphicon-comment"></i> <?php esc_html_e('Comment', 'blog2social'); ?></div>
                                        <div class="col-xs-4"><i class="glyphicon glyphicon-share"></i> <?php esc_html_e('Share', 'blog2social'); ?></div>
                                    </div>
                                </div>
                                <div class="b2s-compose-preview-sharing-to">
                                    <div id="b2s-curation-no-auth-preview" class="b2s-compose-preview-no-network" style="display:none;">
                                        <i class="glyphicon glyphicon-exclamation-sign"></i>
                                        <?php esc_html_e('No networks connected', 'blog2social'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div><!-- /#b2s-compose-expand-area -->
                <!--Compose Area|End-->

                <!-- WordPress posts list -->
                <div class="b2s-wp-posts-section">

                    <!-- Always-visible: search + toggle button -->
                    <div class="b2s-wp-filter-bar">
                        <div class="b2s-wp-filter-bar-left">
                            <input type="text" class="form-control" id="b2sSortPostTitle" name="b2sSortPostTitle" placeholder="<?php esc_attr_e('Search by title...', 'blog2social'); ?>">
                            <button type="button" class="btn btn-default btn-sm" id="b2s-wp-filter-toggle">
                                <i class="glyphicon glyphicon-filter"></i>
                                <span id="b2s-wp-filter-toggle-label" data-show="<?php esc_attr_e('Show filters', 'blog2social'); ?>" data-hide="<?php esc_attr_e('Hide filters', 'blog2social'); ?>"><?php esc_html_e('Show filters', 'blog2social'); ?></span>
                            </button>
                        </div>
                    </div>

                    <!-- Collapsible filter panel — contains the full B2S_Post_Filter form.
                         Hidden inputs (b2sUserLang, b2sPostBlogId etc.) are readable by jQuery
                         even when the panel is display:none. -->
                    <div id="b2s-wp-filter-panel" style="display:none;">
                        <form class="b2sSortForm form-inline" action="#">
                            <input id="b2sType" type="hidden" value="all" name="b2sType">
                            <input id="b2sShowByDate" type="hidden" value="" name="b2sShowByDate">
                            <input id="b2sPagination" type="hidden" value="1" name="b2sPagination">
                            <?php
                            $postFilterCuration = new B2S_Post_Filter('curation');
                            echo wp_kses($postFilterCuration->getItemHtml(), array(
                                'div'    => array('class' => array()),
                                'input'  => array('id' => array(), 'name' => array(), 'class' => array(), 'value' => array(), 'type' => array(), 'placeholder' => array()),
                                'a'      => array('href' => array(), 'id' => array(), 'class' => array()),
                                'span'   => array('class' => array()),
                                'small'  => array(),
                                'select' => array('id' => array(), 'name' => array(), 'class' => array()),
                                'option' => array('value' => array(), 'selected' => array()),
                            ));
                            ?>
                        </form>
                    </div>

                    <!-- Posts list (curation.draft.js fills these) -->
                    <div class="b2s-wp-posts-list-area">
                        <div class="b2s-loading-area" style="display:none;">
                            <br>
                            <div class="b2s-loader-impulse b2s-loader-impulse-md"></div>
                            <div class="clearfix"></div>
                            <div class="text-center b2s-loader-text"><?php esc_html_e("Load data...", "blog2social"); ?></div>
                        </div>
                        <div class="b2s-server-connection-fail alert alert-danger" style="display:none;">
                            <span class="glyphicon glyphicon-remove glyphicon-danger"></span> <?php esc_html_e('Server connection failed. Please try again.', 'blog2social'); ?>
                        </div>
                        <div class="b2s-sort-result-area" style="display:none;">
                            <div class="b2s-sort-result-item-area"></div>
                            <div class="b2s-sort-pagination-area">
                                <div class="btn-group btn-group-sm pull-right b2s-post-per-page-area hidden-xs" role="group">
                                    <button type="button" class="btn <?php echo ((int) $postsPerPageCuration == 25) ? 'btn-primary' : 'btn-default'; ?> b2s-post-per-page" data-post-per-page="25">25</button>
                                    <button type="button" class="btn <?php echo ((int) $postsPerPageCuration == 50) ? 'btn-primary' : 'btn-default'; ?> b2s-post-per-page" data-post-per-page="50">50</button>
                                    <button type="button" class="btn <?php echo ((int) $postsPerPageCuration == 100) ? 'btn-primary' : 'btn-default'; ?> b2s-post-per-page" data-post-per-page="100">100</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hidden inputs for JS -->
                <input type="hidden" id="b2sSelSchedDate" value="<?php echo esc_attr((($selSchedDate != "") ? strtotime($selSchedDate) . '000' : '')); ?>">
                <input type="hidden" id="b2sServerUrl" value="<?php echo esc_attr(B2S_PLUGIN_SERVER_URL); ?>">
                <input type="hidden" id="b2sJsTextPublish" value="<?php esc_attr_e('published', 'blog2social'); ?>">
                <input type="hidden" id="b2sEmojiTranslation" value='<?php echo esc_attr(json_encode(B2S_Tools::getEmojiTranslationList())); ?>'>
                <input type="hidden" id="b2sDefaultNoImage" value="<?php echo esc_url(plugins_url('/assets/images/no-image.png', B2S_PLUGIN_FILE)); ?>">
                <input type="hidden" id="b2sMaxSchedDate" value="<?php echo esc_attr(wp_date('Y-m-d', strtotime("+ 3 years"), new DateTimeZone(date_default_timezone_get()))); ?>">
                <input type="hidden" id="b2s_user_version" value="<?php echo esc_attr(B2S_PLUGIN_USER_VERSION); ?>">
                
                <?php require_once (B2S_PLUGIN_DIR . 'views/b2s/html/footer.php'); ?> 

            </div>
        </div>
    </div>
</div>

<!-- Modals (unchanged) -->
<div class="modal fade b2s-publish-approve-modal" tabindex="-1" role="dialog" aria-labelledby="b2s-publish-approve-modal" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php esc_html_e('Do you want to mark this post as published ?', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body">
                <input type="hidden" value="" id="b2s-approve-network-auth-id">
                <input type="hidden" value="" id="b2s-approve-post-id">
                <button class="btn btn-success b2s-approve-publish-confirm-btn"><?php esc_html_e('YES', 'blog2social'); ?></button>
                <button class="btn btn-default" data-dismiss="modal"><?php esc_html_e('NO', 'blog2social'); ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade b2s-licence-condition-modal" tabindex="-1" role="dialog" aria-labelledby="b2s-licence-condition-modal" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name=".b2s-licence-condition-modal">&times;</button>
                <h4 class="modal-title licence-condition-daily-modal-title"><?php esc_html_e("You've reached your daily posting limit!", "blog2social"); ?></h4>
                <?php if (B2S_PLUGIN_USER_VERSION > 0) { ?>
                    <h4 class="modal-title licence-condition-sched-modal-title b2s-info-display-none"><?php esc_html_e("You've reached your posting limit!", "blog2social"); ?></h4>
                <?php } ?>
            </div>
            <div class="modal-body">
                <p><?php esc_html_e('To increase your limit and enjoy more features, consider upgrading.', 'blog2social'); ?></p>
                <br>
                <a target="_blank" href="<?php echo esc_url(B2S_Tools::getSupportLink('upgrade_version')); ?>" class="btn btn-success center-block"><?php esc_html_e('Upgrade', 'blog2social'); ?></a>
            </div>
        </div>
    </div>
</div>

<?php
$modalNames = array("b2sPreFeatureScheduleModal");
include (B2S_PLUGIN_DIR . 'views/b2s/partials/general-modal.php');
?>

<div class="modal fade" id="b2sInfoCCModal" tabindex="-1" role="dialog" aria-labelledby="b2sInfoCCModal" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="b2s-modal-header-image"><?php esc_html_e('You want to create image posts with any image from your media library?', 'blog2social'); ?></h4>
                <h4 class="modal-title" id="b2s-modal-header-text"><?php esc_html_e('You want to create text posts?', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body">
                <?php if (B2S_PLUGIN_USER_VERSION <= 1) { ?>
                    <p><?php esc_html_e('With Blog2Social you can share your WordPress posts and pages as well as create your own social media posts to share any content based on text, links, images, or video links, or even third-party content from any sources. This enables you to manage all your social media content in one place directly from your WordPress dashboard. Schedule and share link posts, text posts, image posts, and video posts (video links, for example from Youtube) and provide your followers with the best content-mix on your social media networks.', 'blog2social'); ?></p>
                    <br>
                    <p class="b2s-bold"><?php esc_html_e('Unlock Blog2Social Premium Pro to create and share image posts, video links, and text posts from any source.', 'blog2social'); ?></p>
                    <br>
                    <?php esc_html_e('Share image posts:', 'blog2social'); ?><br>
                    <span class="glyphicon glyphicon-ok glyphicon-success"></span> <?php esc_html_e('Grab more attention for your content with photos, videos, or infographics.', 'blog2social'); ?><br>
                    <span class="glyphicon glyphicon-ok glyphicon-success"></span> <?php esc_html_e('Share images to get them into the Google image search to further increase your outreach and traffic from search engines.', 'blog2social'); ?><br>
                    <br>
                    <?php esc_html_e('Share text posts:', 'blog2social'); ?><br>
                    <span class="glyphicon glyphicon-ok glyphicon-success"></span> <?php esc_html_e('Share pure text messages and personal comments with your followers and readers.', 'blog2social'); ?><br>
                    <span class="glyphicon glyphicon-ok glyphicon-success"></span> <?php esc_html_e('Use hashtags, @mentions, or emojis to share your feelings.', 'blog2social'); ?><br>
                    <br>
                    <?php
                    /* translators: %s: URL to the social media posts guide */
                    echo wp_kses(sprintf(__('Learn more about how to share social media posts in the <a href="%s" target="_blank">social media posts guide</a>.', 'blog2social'), esc_url(B2S_Tools::getSupportLink('cc_info_faq'))), array('a' => array('href' => array(), 'target' => array())));
                    ?>
                    <br>
                    <a target="_blank" href="<?php echo esc_url(B2S_Tools::getSupportLink('upgrade_version')); ?>" class="btn btn-success center-block"><?php esc_html_e('Upgrade to PRO and above', 'blog2social'); ?></a>
                    <br>
                    <div style="text-align:center;"><?php
                    /* translators: %s: URL to the Blog2Social Premium trial page */
                    echo wp_kses(sprintf(__('or <a target="_blank" href="%s">start with free 30-days-trial of Blog2Social Premium</a> (no payment information needed)', 'blog2social'), esc_url('https://service.blog2social.com/trial')), array('a' => array('href' => array(), 'target' => array())));
                    ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="b2sTextPostInfoModal" tabindex="-1" role="dialog" aria-labelledby="b2sTextPostInfoModal" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php esc_html_e('Social Media Posts', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body">
                <p><?php esc_html_e('Text posts enable you to share pure text messages and personal comments with your followers and readers. You can also customize your posts with individual hashtags, @mentions, or emojis.', 'blog2social'); ?></p>
                <p><?php
                /* translators: %s: URL to the social media text post guide */
                echo wp_kses(sprintf(__('Get more information on how to share a text post with hashtags, @mentions and emojis in the <a href="%s" target="_blank">social media posts guide</a>.', 'blog2social'), esc_url(B2S_Tools::getSupportLink('cc_text_post_info'))), array('a' => array('href' => array(), 'target' => array()))); ?></p>
                <p><?php
                /* translators: %s: URL to the network settings page */
                echo wp_kses(sprintf(__('In the <a href="%s">Network Settings</a> you can define one or more network selections for your posts.', 'blog2social'), 'admin.php?page=blog2social-network'), array('a' => array('href' => array(), 'target' => array()))); ?></p>
            </div>
        </div>
    </div>
</div>

<div id="b2s-network-select-image" class="modal fade" role="dialog" aria-labelledby="b2s-network-select-image" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2s-network-select-image">&times;</button>
                <h4 class="modal-title"><?php esc_html_e('Select image', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                        require_once B2S_PLUGIN_DIR . 'includes/B2S/Ship/Image.php';
                        $image = new B2S_Ship_Image('curation');
                        echo wp_kses($image->getItemHtml(0, '', '', $userLang), array(
                            'div' => array('class' => array(), 'style' => array()),
                            'span' => array('id' => array()),
                            'a' => array('target' => array(), 'href' => array()),
                            'i' => array('class' => array()),
                            'label' => array('for' => array()),
                            'img' => array('class' => array(), 'alt' => array(), 'src' => array()),
                            'input' => array('class' => array(), 'type' => array(), 'value' => array(), 'id' => array(), 'name' => array(), 'checked' => array()),
                            'br' => array(),
                            'button' => array('class' => array(), 'data-network-id' => array(), 'data-post-id' => array(), 'data-network-auth-id' => array(), 'data-meta-type' => array(), 'data-image-count' => array(), 'style' => array())
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="b2s-posttype-info-modal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modal-xlg" >
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2s-posttype-info-modal">&times;</button>
                <h4 class="modal-title"><?php esc_html_e('What is a Link Post / Image Post?', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body" style="text-align:center; padding: 20px;">
                <?php $postTypeInfoImg = (substr(B2S_LANGUAGE, 0, 2) === 'de') ? 'link-image-post-info-ger.png' : 'link-image-post-info.png'; ?>
                <img src="<?php echo esc_url(plugins_url('/assets/images/b2s/' . $postTypeInfoImg, B2S_PLUGIN_FILE)); ?>"
                     alt="<?php esc_attr_e('Link Post vs Image Post', 'blog2social'); ?>"
                     style="max-width:100%; height:auto; display:inline-block;">
            </div>
        </div>
    </div>
</div>

<div id="b2s-calendar-modal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2s-calendar-modal">&times;</button>
                <h4 class="modal-title"><?php esc_html_e('Scheduled posts', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body b2s-calendar-modal-body" data-language="<?php echo esc_attr(substr(B2S_LANGUAGE, 0, 2)); ?>">
                <div class="b2s-cal-header">
                    <button type="button" class="btn btn-default btn-sm" id="b2s-cal-prev"><i class="glyphicon glyphicon-chevron-left"></i></button>
                    <span id="b2s-cal-title" class="b2s-cal-title"></span>
                    <button type="button" class="btn btn-default btn-sm" id="b2s-cal-next"><i class="glyphicon glyphicon-chevron-right"></i></button>
                </div>
                <div id="b2s-cal-loading" class="b2s-cal-loading" style="display:none;">
                    <i class="glyphicon glyphicon-refresh b2s-spin"></i> <?php esc_html_e('Loading...', 'blog2social'); ?>
                </div>
                <div id="b2s-cal-grid"></div>
                <div id="b2s-cal-day-detail" class="b2s-cal-day-detail" style="display:none;">
                    <h5 id="b2s-cal-day-detail-title" class="b2s-cal-day-detail-title"></h5>
                    <ul id="b2s-cal-day-detail-list" class="b2s-cal-day-list"></ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="b2s-load-draft-modal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2s-load-draft-modal">&times;</button>
                <h4 class="modal-title"><?php esc_html_e('Load draft', 'blog2social'); ?></h4>
            </div>
            <div class="modal-body">
                <div id="b2s-load-draft-loading" style="text-align:center; padding:20px;">
                    <i class="glyphicon glyphicon-refresh b2s-spin"></i>
                </div>
                <div id="b2s-load-draft-empty" style="display:none; text-align:center; padding:20px; color:#888;">
                    <?php esc_html_e('No drafts saved yet.', 'blog2social'); ?>
                </div>
                <ul id="b2s-load-draft-list" class="list-group" style="display:none; margin-bottom:0;"></ul>
            </div>
        </div>
    </div>
</div>

<div id="b2sInfoNetworkModal" class="modal fade" role="dialog" aria-hidden="true" data-backdrop="false" style="display:none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name="#b2sInfoNetworkModal">&times;</button>
                <h4 class="modal-title"><?php esc_html_e('Network collections', 'blog2social'); ?></h4>
            </div>
            <?php $b2sNetworkInfoImg = plugins_url('/assets/images/b2s/' . ((substr(B2S_LANGUAGE, 0, 2) === 'de') ? 'network-collections-info-ger.png' : 'network-collections-info.png'), B2S_PLUGIN_FILE); ?>
            <div class="modal-body" style="text-align:center; padding: 20px;">
                <img src="<?php echo esc_url($b2sNetworkInfoImg); ?>" alt="<?php esc_attr_e('Network collections', 'blog2social'); ?>" style="max-width:100%; height:auto; display:inline-block; margin-bottom:20px;">
                <div><a href="<?php echo esc_url(admin_url('admin.php?page=blog2social-network')); ?>" class="btn btn-primary"><?php esc_html_e('Open Networks', 'blog2social'); ?></a></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade b2s-delete-publish-modal" tabindex="-1" role="dialog" aria-labelledby="b2s-delete-publish-modal" aria-hidden="true" data-backdrop="false"  style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name=".b2s-delete-publish-modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php esc_html_e('Delete entries from the reporting', 'blog2social') ?></h4>
            </div>
            <div class="modal-body">
                <b><?php esc_html_e('You are sure, you want to delete entries from the reporting?', 'blog2social') ?></b>
                <br>
                (<?php esc_html_e('Number of entries', 'blog2social') ?>:  <span id="b2s-delete-confirm-post-count"></span>) 
                <input type="hidden" value="" id="b2s-delete-confirm-post-id">
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal"><?php esc_html_e('NO', 'blog2social') ?></button>
                <button class="btn btn-danger b2s-all-posts-delete-confirm-btn"><?php esc_html_e('YES, delete', 'blog2social') ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade b2s-delete-sched-modal" tabindex="-1" role="dialog" aria-labelledby="b2s-delete-sched-modal" aria-hidden="true" data-backdrop="false"  style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="b2s-modal-close close" data-modal-name=".b2s-delete-sched-modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php esc_html_e('Delete entries from the scheduling', 'blog2social') ?></h4>
            </div>
            <div class="modal-body">
                <b><?php esc_html_e('You are sure you want to delete entries from the scheduling?', 'blog2social') ?> </b>
                <br>
                (<?php esc_html_e('Number of entries', 'blog2social') ?>:  <span id="b2s-delete-confirm-post-count"></span>)
                <input type="hidden" value="" id="b2s-delete-confirm-post-id">
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal"><?php esc_html_e('NO', 'blog2social') ?></button>
                <button class="btn btn-danger b2s-all-sched-posts-delete-confirm-btn"><?php esc_html_e('YES, delete', 'blog2social') ?></button>
            </div>
        </div>
    </div>
</div>