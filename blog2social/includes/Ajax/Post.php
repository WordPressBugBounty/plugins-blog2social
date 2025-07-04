<?php

class Ajax_Post {

    static private $instance = null;

    static public function getInstance() {
        if (null === self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __construct() {
        add_action('wp_ajax_b2s_save_ship_data', array($this, 'saveShipData'));
        add_action('wp_ajax_b2s_save_user_mandant', array($this, 'saveUserMandant'));
        add_action('wp_ajax_b2s_delete_mandant', array($this, 'deleteUserMandant'));
        add_action('wp_ajax_b2s_lock_auto_post_import', array($this, 'lockAutoPostImport'));
        add_action('wp_ajax_b2s_delete_user_auth', array($this, 'deleteUserAuth'));
        add_action('wp_ajax_b2s_update_user_version', array($this, 'updateUserVersion'));
        add_action('wp_ajax_b2s_accept_privacy_policy', array($this, 'acceptPrivacyPolicy'));
        add_action('wp_ajax_b2s_save_network_board_and_group', array($this, 'saveNetworkBoardAndGroup'));
        add_action('wp_ajax_b2s_delete_user_sched_post', array($this, 'deleteUserSchedPost'));
        add_action('wp_ajax_b2s_activate_addon_trial', array($this, 'activateAddonTrial'));
        add_action('wp_ajax_b2s_delete_user_publish_post', array($this, 'deleteUserPublishPost'));
        add_action('wp_ajax_b2s_delete_user_approve_post', array($this, 'deleteUserApprovePost'));
        add_action('wp_ajax_b2s_delete_user_cc_draft_post', array($this, 'deleteUserCcDraftPost'));
        add_action('wp_ajax_b2s_user_network_settings', array($this, 'saveUserNetworkSettings'));
        add_action('wp_ajax_b2s_auto_post_settings', array($this, 'saveAutoPostSettings'));
        add_action('wp_ajax_b2s_save_social_meta_tags', array($this, 'saveSocialMetaTags'));
        add_action('wp_ajax_b2s_reset_social_meta_tags', array($this, 'resetSocialMetaTags'));
        add_action('wp_ajax_b2s_save_user_time_settings', array($this, 'saveUserTimeSettings'));
        add_action('wp_ajax_b2s_network_save_auth_to_settings', array($this, 'saveAuthToSettings'));
        add_action('wp_ajax_b2s_prg_login', array($this, 'prgLogin'));
        add_action('wp_ajax_b2s_prg_logout', array($this, 'prgLogout'));
        add_action('wp_ajax_b2s_prg_ship', array($this, 'prgShip'));
        add_action('wp_ajax_b2s_ship_navbar_save_settings', array($this, 'b2sShipNavbarSaveSettings'));
        add_action('wp_ajax_b2s_post_mail_update', array($this, 'b2sPostMailUpdate'));
        add_action('wp_ajax_b2s_calendar_move_post', array($this, 'b2sCalendarMovePost'));
        add_action('wp_ajax_b2s_delete_post', array($this, 'b2sDeletePost'));
        add_action('wp_ajax_b2s_edit_save_post', array($this, 'b2sEditSavePost'));
        add_action("wp_ajax_b2s_get_calendar_release_locks", array($this, 'releaseLocks'));
        add_action("wp_ajax_b2s_update_approve_post", array($this, 'updateApprovePost'));
        add_action("wp_ajax_b2s_hide_rating", array($this, 'hideRating'));
        add_action("wp_ajax_b2s_hide_premium_message", array($this, 'hidePremiumMessage'));
        add_action("wp_ajax_b2s_hide_trail_message", array($this, 'hideTrailMessage'));
        add_action("wp_ajax_b2s_hide_trail_ended_message", array($this, 'hideTrailEndedMessage'));
        add_action("wp_ajax_b2s_plugin_deactivate_delete_sched_post", array($this, 'b2sPluginDeactivate'));
        add_action("wp_ajax_b2s_curation_share", array($this, 'curationShare'));
        add_action("wp_ajax_b2s_curation_customize", array($this, 'curationCustomize'));
        add_action("wp_ajax_b2s_curation_draft", array($this, 'curationDraft'));
        add_action("wp_ajax_b2s_move_user_auth_to_profile", array($this, 'moveUserAuthToProfile'));
        add_action("wp_ajax_b2s_assign_network_user_auth", array($this, 'assignNetworkUserAuth'));
        add_action("wp_ajax_b2s_save_post_template", array($this, 'savePostTemplate'));
        add_action("wp_ajax_b2s_load_default_post_template", array($this, 'loadDefaultPostTemplate'));
        add_action('wp_ajax_b2s_save_draft_data', array($this, 'saveDraftData'));
        add_action('wp_ajax_b2s_delete_user_draft', array($this, 'deleteDraft'));
        add_action('wp_ajax_b2s_change_favorite_status', array($this, 'changeFavoriteStatus'));
        add_action('wp_ajax_b2s_save_url_parameter', array($this, 'saveUrlParameter'));
        add_action('wp_ajax_b2s_re_post_submit', array($this, 'rePostSubmit'));
        add_action('wp_ajax_b2s_delete_re_post_sched', array($this, 'deleteRePostSched'));
        add_action('wp_ajax_b2s_community_register', array($this, 'communityRegister'));
        add_action('wp_ajax_b2s_auto_post_assign_by_disconnect', array($this, 'autoPostAssignByDisconnect'));
        add_action('wp_ajax_b2s_metrics_starting_confirm', array($this, 'metricsStartingConfirm'));
        add_action('wp_ajax_b2s_metrics_banner_close', array($this, 'metricsBannerClose'));
        add_action('wp_ajax_b2s_metrics_feedback_close', array($this, 'metricsFeedbackClose'));
        add_action('wp_ajax_b2s_continue_trial_option', array($this, 'continueTrialOption'));
        add_action('wp_ajax_b2s_final_trial_option', array($this, 'hideFinalTrialOption'));
        add_action('wp_ajax_b2s_upload_video', array($this, 'uploadVideo'));
        add_action('wp_ajax_b2s_delete_all_posts_older_than', array($this, 'deleteAllPostsOlderThan'));
        add_action('wp_ajax_b2s_add_user_app', array($this, 'addUserApp'));
        add_action('wp_ajax_b2s_edit_user_app', array($this, 'editUserApp'));
        add_action('wp_ajax_b2s_delete_user_app', array($this, 'deleteUserApp'));
        add_action('wp_ajax_b2s_save_user_onboarding', array($this, 'saveUserOnboarding'));
        add_action('wp_ajax_b2s_save_user_onboarding_paused', array($this, 'saveUserOnboardingPaused'));
        add_action('wp_ajax_b2s_ass_auth_save', array($this, 'assAuthSave'));
        add_action('wp_ajax_b2s_ass_generate_text_sm', array($this, 'assGenerateContent'));
        add_action('wp_ajax_b2s_ass_settings_save', array($this, 'assSettingsSave'));
        add_action('wp_ajax_b2s_ass_logout', array($this, 'assLogout'));
        add_action('wp_ajax_b2s_delete_post_notice_all', array($this, 'deletePostNoticeAll'));
        add_action('wp_ajax_b2s_check_image_size_network', array($this, 'checkImageSizeNetwork'));
        add_action('wp_ajax_b2s_check_image_size_network_all', array($this, 'checkImageSizeNetworkAll'));
        add_action('wp_ajax_b2s_send_trail_feedback', array($this, 'sendTrailFeedback'));
        add_action('wp_ajax_b2s_debug_connection', array($this, 'debugConnection'));
    }


    public function debugConnection() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        try {
            $hostname = gethostname();
            $serverIp = gethostbyname($hostname);
            $publicServerIp = file_get_contents('https://ipinfo.io/ip');
            if (filter_var($serverIp, FILTER_VALIDATE_IP)) {
                $comTrace = (PHP_OS_FAMILY === 'Windows') ? 'tracert' : 'traceroute -T';
                $targetIp = '178.77.85.168';
                if (defined("B2S_DEBUG_MODE") && B2S_DEBUG_MODE == '1') {
                    $targetIp = '82.165.82.185';
                }
                $com = $comTrace . " " . escapeshellarg($targetIp);
                $resTrace = shell_exec($com);
                $resTrace = "Server IP:" . $publicServerIp . " (Intern: " . $serverIp . ")<br><br>" . utf8_encode(nl2br($resTrace)) . "<br><br>---";
                $output = wp_kses($resTrace, array('br' => array()));
                echo json_encode(array('result' => true, 'output' => $output));
                wp_die();
            }
            echo json_encode(array('result' => false, 'error' => 'default'));
            wp_die();
        } catch (Exception $ex) {
            echo json_encode(array('result' => false, 'error' => 'default'));
            wp_die();
        }
            
    }


    public function uploadVideo() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"]) && isset($_FILES["file"]["tmp_name"]) && !empty($_FILES["file"]["tmp_name"])) {
            $isVideo = wp_check_filetype_and_ext(sanitize_text_field($_FILES["file"]["tmp_name"]), sanitize_text_field($_FILES["file"]["name"]));
            if (isset($isVideo['type']) && $isVideo['type'] !== false) {
                if (preg_match('/^video/im', $isVideo['type']) && in_array($isVideo['type'], unserialize(B2S_PLUGIN_ALLOW_VIDEO_MIME_TYPE))) {
                    $upload = wp_upload_bits(sanitize_text_field($_FILES["file"]["name"]), null, file_get_contents(sanitize_text_field($_FILES["file"]["tmp_name"])));
                    $attachment = array(
                        'post_mime_type' => isset($_FILES['file']['type']) ? sanitize_mime_type($_FILES['file']['type']): "",
                        'post_title' => sanitize_file_name($_FILES['file']['name']),
                        'post_content' => '',
                        'post_status' => 'inherit'
                    );
                    $attachment_id = wp_insert_attachment($attachment, $upload['file']);
                    require_once (B2S_PLUGIN_DIR . 'includes/B2S/Video/Item.php');
                    $videoItem = new B2S_Video_Item();
                    //TODO wp_kses
                    $videos = $videoItem->getSingleVideoItemHtml($attachment_id);
                    echo json_encode(array('result' => true, 'videoItem' => $videos));
                    wp_die();
                }
            }
            echo json_encode(array('result' => false, 'error' => 'invalid_type'));
            wp_die();
        }
        echo json_encode(array('result' => false, 'error' => 'invalid_file'));
        wp_die();
     
    }

    public function curationDraft() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }
                
            //save as blog post
            if (isset($_POST['postFormat'])) {
                if ((int) $_POST['postFormat'] == 1) { //Imagepost
                    if (isset($_POST['image_id']) && !empty($_POST['image_id']) && isset($_POST['comment_image']) && !empty($_POST['comment_image'])) {
                        $data = array('title' => sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'image_id' => (int) $_POST['image_id'], 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                        wp_die();
                    }
                } else if ((int) $_POST['postFormat'] == 0) {  //Linkpost
                    if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['comment']) && !empty($_POST['comment']) && isset($_POST['url']) && !empty($_POST['url'])) {
                        $data = array('title' => sanitize_textarea_field(wp_unslash($_POST['title'])), 'url' => esc_url_raw(wp_unslash($_POST['url'])), 'content' => (isset($_POST['comment']) ? sanitize_textarea_field(wp_unslash($_POST['comment'])) : ''), 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                        wp_die();
                    }
                } else {
                    if (isset($_POST['comment_text']) && !empty($_POST['comment_text'])) {
                        $data = array('title' => sanitize_textarea_field(wp_unslash($_POST['comment_text'])), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_text'])), 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                        wp_die();
                    }
                }
                require_once (B2S_PLUGIN_DIR . 'includes/B2S/Curation/Save.php');
                if (isset($_POST['b2s-draft-id']) && !empty($_POST['b2s-draft-id']) && (int) $_POST['b2s-draft-id'] > 0) {
                    $data = array_merge($data, array('ID' => (int) $_POST['b2s-draft-id']));
                    $curation = new B2S_Curation_Save($data);
                    $source = (get_post_meta((int) $_POST['b2s-draft-id'], "b2s_source", true));
                    $postId = $curation->updateContent($source);
                } else {
                    $curation = new B2S_Curation_Save($data);
                    $postId = $curation->insertContent();
                }
                if ($postId !== false) {
                    if (isset($_POST['ship_type']) && isset($_POST['profile_select'])) {
                        $draft_data = array(
                            'ship_type' => sanitize_text_field(wp_unslash($_POST['ship_type'])),
                            'profile_select' => sanitize_text_field(wp_unslash($_POST['profile_select']))
                        );
                        if ((int) $_POST['ship_type'] > 0 && isset($_POST['ship_date'])) {
                            $draft_data['ship_date'] = sanitize_text_field(wp_unslash($_POST['ship_date']));
                        }
                        if (isset($_POST['twitter_select'])) {
                            $draft_data['twitter_select'] = sanitize_text_field(wp_unslash($_POST['twitter_select']));
                        }
                        global $wpdb;
                        if ($wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}b2s_posts_drafts'") == $wpdb->prefix . 'b2s_posts_drafts') {
                            $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
                            $optionUserTimeZone = $options->_getOption('user_time_zone');
                            $userTimeZone = ($optionUserTimeZone !== false) ? $optionUserTimeZone : get_option('timezone_string');
                            $userTimeZoneOffset = (empty($userTimeZone)) ? get_option('gmt_offset') : B2S_Util::getOffsetToUtcByTimeZone($userTimeZone);
                            $date = B2S_Util::getCustomLocaleDateTime($userTimeZoneOffset);
                            $draftEntry = $wpdb->get_var($wpdb->prepare("SELECT `id` FROM `{$wpdb->prefix}b2s_posts_drafts` WHERE `blog_user_id` = %d AND `post_id` = %d AND `save_origin` = 1", B2S_PLUGIN_BLOG_USER_ID, (int) $postId));
                            if ($draftEntry !== NULL && (int) $draftEntry > 0) {
                                $wpdb->update($wpdb->prefix . 'b2s_posts_drafts', array('data' => serialize($draft_data), 'last_save_date' => $date), array('id' => (int) $draftEntry));
                            } else {
                                $wpdb->insert($wpdb->prefix . 'b2s_posts_drafts', array('blog_user_id' => B2S_PLUGIN_BLOG_USER_ID, 'post_id' => (int) $postId, 'data' => serialize($draft_data), 'last_save_date' => $date, 'save_origin' => 1));
                            }
                        }
                    }
                    echo json_encode(array('result' => true, 'postId' => $postId));
                    wp_die();
                }
            }
            echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
            wp_die();
    }

    public function curationShare() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
        }

        //save as blog post
            if (isset($_POST['postFormat'])) {
                $title = "";
                if ((int) $_POST['postFormat'] == 1) { //Imagepost
                    if (isset($_POST['b2s-instant-sharing-input-title_image']) && !empty($_POST['b2s-instant-sharing-input-title_image'])) {
                        $title = sanitize_textarea_field(wp_unslash($_POST['b2s-instant-sharing-input-title_image']));
                    }
                    if (isset($_POST['image_id']) && !empty($_POST['image_id']) && isset($_POST['comment_image']) && !empty($_POST['comment_image'])) {
                        if (!empty($title)) {
                            $data = array('title' => sanitize_textarea_field(wp_unslash($title)), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'image_id' => (int) $_POST['image_id'], 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                        } else {
                            $data = array('title' => sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'image_id' => (int) $_POST['image_id'], 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                        wp_die();
                    }
                } else if ((int) $_POST['postFormat'] == 0) { //Linkpost
                    if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['comment']) && !empty($_POST['comment']) && isset($_POST['url']) && !empty($_POST['url'])) {
                        $data = array('title' => sanitize_textarea_field(wp_unslash($_POST['title'])), 'url' => esc_url_raw(wp_unslash($_POST['url'])), 'content' => (isset($_POST['comment']) ? sanitize_textarea_field(wp_unslash($_POST['comment'])) : ''), 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                        wp_die();
                    }
                } else {
                    if (isset($_POST['b2s-instant-sharing-input-title_text']) && !empty($_POST['b2s-instant-sharing-input-title_text'])) {
                        $title = sanitize_textarea_field(wp_unslash($_POST['b2s-instant-sharing-input-title_text']));
                    }
                    if (isset($_POST['comment_text']) && !empty($_POST['comment_text'])) {
                        if (!empty($title)) {
                            $data = array('title' => sanitize_textarea_field(wp_unslash($title)), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_text'])), 'image_id' => (int) $_POST['image_id'], 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                        } else {
                            $data = array('content' => sanitize_textarea_field(wp_unslash($_POST['comment_text'])), 'image_id' => (int) $_POST['image_id'], 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                        }
                    } else {
                        echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                        wp_die();
                    }
                }
                require_once (B2S_PLUGIN_DIR . 'includes/B2S/Curation/Save.php');
        
                $curation = new B2S_Curation_Save($data);
                $postId = (isset($_POST['b2s-draft-id']) && (int) $_POST['b2s-draft-id'] > 0) ? (int) $_POST['b2s-draft-id'] : $curation->insertContent();
                if ($postId !== false) {
                    //check Data
                    if (isset($_POST['profile_select'])) {
                        $profilId = (int) $_POST['profile_select'];
                        if (isset($_POST['profile_data_' . $profilId]) && !empty($_POST['profile_data_' . $profilId])) {
                            $networkData = json_decode(base64_decode(sanitize_text_field(wp_unslash($_POST['profile_data_' . $profilId]))));
                            if ($networkData !== false && is_array($networkData) && !empty($networkData)) {
                                $notAllowNetwork = array(11);
                                $tosCrossPosting = unserialize(B2S_PLUGIN_NETWORK_CROSSPOSTING_LIMIT);
                                $allowNetworkOnlyImage = array(6, 7, 12, 21, 36);
                                $allowNetworkOnlyLink = array(9, 15);
                                //TOS Twitter 032018 - none multiple Accounts - User select once
                                $selectedTwitterProfile = (isset($_POST['twitter_select']) && !empty($_POST['twitter_select'])) ? (int) $_POST['twitter_select'] : '';
                                require_once (B2S_PLUGIN_DIR . 'includes/B2S/QuickPost.php');
                                $quickPost = new B2S_QuickPost($data['content'], $data['title']);

                                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
                                $imageUrl= (!empty($_POST['image_url']))? esc_url_raw(trim(urldecode(wp_unslash($_POST['image_url'])))): "";
                                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
                                $linkImageUrl= (!empty($_POST['link_image_url'])) ? esc_url_raw((trim(urldecode(wp_unslash($_POST['link_image_url']))))) : "";

                                $defaultShareData = array('default_titel' => sanitize_text_field($data['title']),
                                    'image_url' => !empty($imageUrl) ? $imageUrl : $linkImageUrl,
                                    'lang' => trim(strtolower(substr(B2S_LANGUAGE, 0, 2))),
                                    'board' => '',
                                    'group' => '',
                                    'post_id' => $postId,
                                    'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                                    'tags' => array(),
                                    'url' => ((isset($_POST['url']) && !empty($_POST['url'])) ? esc_url_raw(wp_unslash($_POST['url'])) : ''),
                                    'no_cache' => 0,
                                    'token' => B2S_PLUGIN_TOKEN,
                                    'user_timezone' => (isset($_POST['b2s_user_timezone']) ? (int) $_POST['b2s_user_timezone'] : 0 ),
                                    'publish_date' => isset($_POST['publish_date']) ? wp_date('Y-m-d H:i:s', strtotime(sanitize_text_field(wp_unslash($_POST['publish_date']))), new DateTimeZone(date_default_timezone_get())) : wp_date('Y-m-d H:i:s', current_time('timestamp'), new DateTimeZone(date_default_timezone_get())));
                             
                                require_once (B2S_PLUGIN_DIR . 'includes/B2S/Ship/Save.php');
                                $b2sShipSend = new B2S_Ship_Save();
                                $content = array();
                                $countPost = 0;
                                $countNetworkXIntegration = 0;
                                foreach ($networkData as $k => $value) {
                                    if (isset($value->networkAuthId) && (int) $value->networkAuthId > 0 && isset($value->networkId) && (int) $value->networkId > 0 && isset($value->networkType)) {
                                        //TOS Twitter 032018 - none multiple Accounts - User select once
                                        if (((int) $value->networkId != 2 && (int) $value->networkId != 45) || ( ((int) $value->networkId == 2 || (int) $value->networkId == 45) && (empty($selectedTwitterProfile) || ((int) $selectedTwitterProfile == (int) $value->networkAuthId)))) {
                                            //Filter: image network
                                            if ((int) $_POST['postFormat'] == 0) {
                                                if (in_array($value->networkId, $allowNetworkOnlyImage)) {
                                                    if (empty($defaultShareData['image_url'])) {
                                                        array_push($content, array('networkDisplayName' => $value->networkUserName, 'networkAuthId' => $value->networkAuthId, 'networkId' => $value->networkId, 'networkType' => $value->networkType, 'html' => $b2sShipSend->getItemHtml($value->networkId, 'IMAGE_FOR_CURATION')));
                                                        continue;
                                                    }
                                                }
                                            } else if ((int) $_POST['postFormat'] == 1) {
                                                if (in_array($value->networkId, $allowNetworkOnlyLink)) {
                                                    array_push($content, array('networkDisplayName' => $value->networkUserName, 'networkAuthId' => $value->networkAuthId, 'networkId' => $value->networkId, 'networkType' => $value->networkType, 'html' => $b2sShipSend->getItemHtml($value->networkId, 'LINK_FOR_CURATION')));
                                                    continue;
                                                }
                                            }
                                            //Filter: Blog network
                                            if (in_array($value->networkId, $notAllowNetwork)) {
                                                continue;
                                            }

                                            //Filter: TOS Crossposting ignore
                                            if (isset($tosCrossPosting[$value->networkId][$value->networkType])) {
                                                continue;
                                            }

                                            //Filter: DeprecatedNetwork-8 31 march
                                            if ($value->networkId == 8) {
                                                if (isset($_POST['ship_type']) && (int) $_POST['ship_type'] == 1 && isset($_POST['ship_date']) && !empty($_POST['ship_date']) && strtotime(sanitize_text_field(wp_unslash($_POST['ship_date']))) !== false) {
                                                    if (wp_date('Y-m-d', strtotime(sanitize_text_field(wp_unslash($_POST['ship_date']))), new DateTimeZone(date_default_timezone_get())) >= '2019-03-31') {
                                                        //special case xing groups  contains network_display_name
                                                        global $wpdb;
                                                        $networkDetailsId = 0;
                                                        if ($value->networkType == 2) {
                                                            $networkDetailsIdSelect = $wpdb->get_col($wpdb->prepare("SELECT postNetworkDetails.id FROM {$wpdb->prefix}b2s_posts_network_details AS postNetworkDetails WHERE postNetworkDetails.network_auth_id = %s AND postNetworkDetails.network_display_name = %s", $value->networkAuthId, trim($value->networkUserName)));
                                                        } else {
                                                            $networkDetailsIdSelect = $wpdb->get_col($wpdb->prepare("SELECT postNetworkDetails.id FROM {$wpdb->prefix}b2s_posts_network_details AS postNetworkDetails WHERE postNetworkDetails.network_auth_id = %s", $value->networkAuthId));
                                                        }
                                                        if (isset($networkDetailsIdSelect[0])) {
                                                            $networkDetailsId = (int) $networkDetailsIdSelect[0];
                                                        } else {
                                                            $wpdb->insert($wpdb->prefix . 'b2s_posts_network_details', array(
                                                                'network_id' => (int) $value->networkId,
                                                                'network_type' => (int) $value->networkType,
                                                                'network_auth_id' => (int) $value->networkAuthId,
                                                                'owner_blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                                                                'network_display_name' => $value->networkUserName), array('%d', '%d', '%d', '%d', '%s'));
                                                            $networkDetailsId = $wpdb->insert_id;
                                                        }
                                                        $timeZone = (isset($_POST['b2s_user_timezone']) ? (int) $_POST['b2s_user_timezone'] : 0 );
                                                        $wpdb->insert($wpdb->prefix . 'b2s_posts', array(
                                                            'post_id' => $postId,
                                                            'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                                                            'user_timezone' => $timeZone,
                                                            'publish_date' => wp_date('Y-m-d H:i:s', strtotime(B2S_Util::getUTCForDate(gmdate('Y-m-d H:i:s'), $timeZone * (-1))), new DateTimeZone(date_default_timezone_get())),
                                                            'publish_error_code' => 'DEPRECATED_NETWORK_8',
                                                            'network_details_id' => $networkDetailsId), array('%d', '%d', '%s', '%s', '%s', '%d'));
                                                        continue;
                                                    }
                                                }
                                            }
                                            $_POST['postFormat'] = ((int) $_POST['postFormat'] == 2) ? '1' : sanitize_text_field(wp_unslash($_POST['postFormat']));
                                            $shareData = $quickPost->prepareShareData($value->networkAuthId, $value->networkId, $value->networkType, sanitize_text_field(wp_unslash($_POST['postFormat'])));
                                            if ($shareData !== false) {
                                                $shareData['network_id'] = $value->networkId;
                                                $shareData['network_type'] = $value->networkType;
                                                $shareData['instant_sharing'] = ((isset($value->instant_sharing) && (int) $value->instant_sharing == 1) ? 1 : 0);
                                                $shareData['network_display_name'] = $value->networkUserName;
                                                $shareData['network_auth_id'] = $value->networkAuthId;
                                                $shareData = array_merge($shareData, $defaultShareData);
                                                //Type schedule
                                                if (isset($_POST['ship_type']) && (int) $_POST['ship_type'] == 1 && isset($_POST['ship_date']) && !empty($_POST['ship_date']) && strtotime(sanitize_text_field(wp_unslash($_POST['ship_date']))) !== false) {
                                                    $shipDateTime = array('date' => array( wp_date('Y-m-d', strtotime(sanitize_text_field(wp_unslash($_POST['ship_date']))), new DateTimeZone(date_default_timezone_get()))), 'time' => array(wp_date('H:i', strtotime(sanitize_text_field(wp_unslash($_POST['ship_date']))), new DateTimeZone(date_default_timezone_get()))));
                                                    $schedData = array(
                                                        'date' => $shipDateTime['date'],
                                                        'time' => $shipDateTime['time'],
                                                        'releaseSelect' => 1,
                                                        'user_timezone' => (isset($_POST['b2s_user_timezone']) ? (int) $_POST['b2s_user_timezone'] : 0 ),
                                                        'saveSetting' => false);
                                                    $schedRes = $b2sShipSend->saveSchedDetails($shareData, $schedData, array());
                                                    $schedResult = array_merge($schedRes, array('networkDisplayName' => $value->networkUserName, 'networkId' => $value->networkId, 'networkType' => $value->networkType));
                                                    $content = array_merge($content, array($schedResult));
                                                } else {
                                                    //TYPE direct share
                                                    $b2sShipSend->savePublishDetails($shareData, array(), true);
                                                }
                                                $countPost++;

                                                //Network Condition X:45 Integration
                                                if ($value->networkId == 45) {
                                                    $countNetworkXIntegration++;
                                                }
                                            }
                                        }
                                    }
                                }
                                if (!empty($b2sShipSend->postDataApprove)) {
                                    $sendResult = $b2sShipSend->getShareApproveDetails(true);
                                    $content = array_merge($content, $sendResult);
                                }
                                if (!empty($b2sShipSend->postData)) {
                                    $sendResult = $b2sShipSend->postPublish(true);
                                    $content = array_merge($content, $sendResult);
                                }
                                //Render Ouput
                                if (is_array($content) && !empty($content)) {
                                    //Licence /Network Condition
                                    $currentOpenDailyLimit = 0;
                                    $currentOpenSchedLimit = 0;
                                    $currentNetwork45OpenDailyLimit = 0;
                                    $currentNetwork45OpenSchedLimit = 0;

                                    $tokenInfo = get_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID);
                                    if ($tokenInfo !== false && is_array($tokenInfo) && !empty($tokenInfo)) {
                                        if (isset($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']) && isset($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota']) && isset($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'])) {
                                            if (B2S_PLUGIN_USER_VERSION > 0) {
                                                $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) - (int) $countPost;
                                            }
                                            //Type direct Post
                                            if (isset($_POST['ship_type']) && (int) $_POST['ship_type'] == 0) {
                                                $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota'] = ($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota']) - (int) $countPost;
                                            }
                                            $currentOpenDailyLimit = (int) $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota'];
                                            $currentOpenSchedLimit = (B2S_PLUGIN_USER_VERSION > 0) ? (int) $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] : $currentOpenDailyLimit;
                                            update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $tokenInfo, false);
                                        }

                                        if ($countNetworkXIntegration > 0) {
                                            if (isset($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION']) && isset($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]) && !empty($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45])) {
                                                $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota = ($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota) - (int) $countNetworkXIntegration;
                                                //Type direct Post
                                                if (isset($_POST['ship_type']) && (int) $_POST['ship_type'] == 0) {
                                                    $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_daily_post_quota = ($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_daily_post_quota) - (int) $countNetworkXIntegration;
                                                }
                                                $currentNetwork45OpenDailyLimit = (int) $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_daily_post_quota;
                                                $currentNetwork45OpenSchedLimit = (int) $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota;
                                                update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $tokenInfo, false);
                                            }
                                        }
                                    }
                                    require_once (B2S_PLUGIN_DIR . 'includes/B2S/Curation/View.php');
                                    $view = new B2S_Curation_View();
                                    echo json_encode(array('result' => true, 'currentNetwork45OpenDailyLimit' => $currentNetwork45OpenDailyLimit, 'currentNetwork45OpenSchedLimit' => $currentNetwork45OpenSchedLimit, 'currentOpenDailyLimit' => $currentOpenDailyLimit, 'currentOpenSchedLimit' => $currentOpenSchedLimit, 'content' => $view->getResultListHtml($content)));
                                    wp_die();
                                }
                            }
                            echo json_encode(array('result' => false, 'error' => 'NO_AUTH'));
                            wp_die();
                        }
                        echo json_encode(array('result' => false, 'error' => 'NO_AUTH'));
                        wp_die();
                    }
                }
            }
            echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
            wp_die();
       
    }

    public function curationCustomize() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['postFormat'])) {
            if ((int) $_POST['postFormat'] == 1) { //Imagepost
                $title = "";
                if (isset($_POST['b2s-instant-sharing-input-title_image'])) {
                    $title = sanitize_textarea_field(wp_unslash($_POST['b2s-instant-sharing-input-title_image']));
                }
                if (isset($_POST['image_id']) && !empty($_POST['image_id']) && isset($_POST['comment_image']) && !empty($_POST['comment_image'])) {
                    $data = array('title' => !empty($title) ? $title : sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_image'])), 'image_id' => (int) $_POST['image_id'], 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                    $imgUrl = (isset($_POST['image_url']) && !empty($_POST['image_url'])) ? esc_url_raw(wp_unslash($_POST['image_url'])) : '';
                } else {
                    echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                    wp_die();
                }
            } else if ((int) $_POST['postFormat'] == 0) { //Linkpost
                if (isset($_POST['title']) && !empty($_POST['title']) && isset($_POST['comment']) && !empty($_POST['comment']) && isset($_POST['url']) && !empty($_POST['url'])) {
                    $data = array('title' => sanitize_textarea_field(wp_unslash($_POST['title'])), 'url' => esc_url_raw(wp_unslash($_POST['url'])), 'content' => (isset($_POST['comment']) ? sanitize_textarea_field(wp_unslash($_POST['comment'])) : ''), 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                    $imgUrl = (isset($_POST['link_image_url']) && !empty($_POST['link_image_url'])) ? esc_url_raw(wp_unslash($_POST['link_image_url'])) : '';
                } else {
                    echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                    wp_die();
                }
            } else if ((int) $_POST['postFormat'] == 2) {//Textpost
                $title = "";
                if (isset($_POST['b2s-instant-sharing-input-title_text'])) {
                    $title = sanitize_textarea_field(wp_unslash($_POST['b2s-instant-sharing-input-title_text']));
                }
                if (isset($_POST['comment_text']) && !empty($_POST['comment_text'])) {
                    $data = array('title' => !empty($title) ? $title : sanitize_textarea_field(wp_unslash($_POST['comment_text'])), 'content' => sanitize_textarea_field(wp_unslash($_POST['comment_text'])), 'author_id' => B2S_PLUGIN_BLOG_USER_ID);
                } else {
                    echo json_encode(array('result' => false, 'error' => 'NO_DATA'));
                    wp_die();
                }
            }
            if (isset($_POST['b2s-draft-id']) && !empty($_POST['b2s-draft-id']) && (int) $_POST['b2s-draft-id'] > 0) {
                $data = array_merge($data, array('ID' => (int) $_POST['b2s-draft-id']));
            }
            require_once (B2S_PLUGIN_DIR . 'includes/B2S/Curation/Save.php');
            $curation = new B2S_Curation_Save($data);
            if (isset($data['ID']) && (int) $data['ID'] > 0) {
                $postId = $curation->updateContent();
            } else {
                $postId = $curation->insertContent();
            }
            if ($postId !== false) {
                $redirect_url = get_option('siteurl') . ((substr(get_option('siteurl'), -1, 1) == '/') ? '' : '/') . 'wp-admin/admin.php?page=blog2social-ship&b2sPostType=ex&postId=' . $postId;
                if (isset($_POST['ship_type']) && (int) $_POST['ship_type'] == 1 && isset($_POST['ship_date']) && !empty($_POST['ship_date'])) {
                    $sched_date_time =  wp_date('Y-m-d H:i:s', strtotime(sanitize_text_field(wp_unslash($_POST['ship_date']))), new DateTimeZone(date_default_timezone_get()));
                    if ($sched_date_time !== false) {
                        $redirect_url .= '&schedDateTime=' . $sched_date_time;
                    }
                }
                if (isset($_POST['profile_select']) && (int) $_POST['profile_select'] > 0) {
                    $redirect_url .= '&profile=' . (int) $_POST['profile_select'];
                }
                if (isset($imgUrl) && !empty($imgUrl)) {
                    $redirect_url .= '&img=' . base64_encode($imgUrl);
                }
                if (isset($_POST['postFormat'])) {
                    if (sanitize_text_field(wp_unslash($_POST['postFormat'])) == '0') {
                        $redirect_url .= '&postFormat=0';
                    } else {
                        $redirect_url .= '&postFormat=1';
                    }
                }
                echo json_encode(array('result' => true, 'redirect' => $redirect_url));
                wp_die();
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
        
    }

    public function b2sPluginDeactivate() {

        if (!current_user_can('administrator') || !check_ajax_referer('b2s_deactivate_nonce', 'b2s_deactivate_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['delete_sched_post']) && (int) $_POST['delete_sched_post'] == 1) {
            update_option("B2S_PLUGIN_DEACTIVATE_SCHED_POST", 1, false);
        } else {
            delete_option("B2S_PLUGIN_DEACTIVATE_SCHED_POST");
        }
        echo json_encode(array('result' => true));
        wp_die();
    
    }

    public function prgShip() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (!empty($_POST) && isset($_POST['token']) && !empty($_POST['token']) && isset($_POST['prg_id']) && (int) $_POST['prg_id'] > 0 && isset($_POST['blog_user_id']) && (int) $_POST['blog_user_id'] > 0 && isset($_POST['post_id']) && (int) $_POST['post_id'] > 0) {
            $dataPost = $_POST;
            $type = sanitize_text_field(wp_unslash($dataPost['publish']));
            $dataPost['status'] = ((int) $type == 1) ? 'hold' : 'open';
            unset($dataPost['confirm']);
            unset($dataPost['blog_user_id']);
            unset($dataPost['post_id']);
            unset($dataPost['publish']);
            unset($dataPost['b2s_security_nonce']);
            $result = json_decode(trim(PRG_Api_Post::post(B2S_PLUGIN_PRG_API_ENDPOINT . 'post.php', $dataPost)));
            if (is_object($result) && !empty($result) && isset($result->result) && (int) $result->result == 1 && isset($result->create) && (int) $result->create == 1) {
                //Contact
                global $wpdb;
                $userEntry = $wpdb->get_var($wpdb->prepare("SELECT `id` FROM `{$wpdb->prefix}b2s_user_contact` WHERE `blog_user_id` = %d", (int) $_POST['blog_user_id']));
                $userContact = array(
                    'name_mandant' => isset($_POST['name_mandant'])? sanitize_text_field(wp_unslash($_POST['name_mandant'])):"",
                    'created' =>  wp_date('Y-m-d H:i;s', null, new DateTimeZone(date_default_timezone_get())),
                    'name_presse' => isset($_POST['name_presse'])? sanitize_text_field(wp_unslash($_POST['name_presse'])): "",
                    'anrede_presse' => isset($_POST['anrede_presse'])? sanitize_text_field(wp_unslash($_POST['anrede_presse'])):"",
                    'vorname_presse' => isset($_POST['vorname_presse'])? sanitize_text_field(wp_unslash($_POST['vorname_presse'])) :"",
                    'nachname_presse' => isset($_POST['nachname_presse'])? sanitize_text_field(wp_unslash($_POST['nachname_presse'])):"",
                    'strasse_presse' => isset($_POST['strasse_presse'])? sanitize_text_field(wp_unslash($_POST['strasse_presse'])):"",
                    'nummer_presse' => isset($_POST['nummer_presse'])? sanitize_text_field(wp_unslash($_POST['nummer_presse'])):"",
                    'plz_presse' => isset($_POST['plz_presse'])? sanitize_text_field(wp_unslash($_POST['plz_presse'])) :"",
                    'ort_presse' => isset($_POST['ort_presse'])? sanitize_text_field(wp_unslash($_POST['ort_presse'])) :"",
                    'land_presse' => isset($_POST['land_presse'])? sanitize_text_field(wp_unslash($_POST['land_presse'])): "",
                    'email_presse' => isset($_POST['email_presse'])? sanitize_text_field(wp_unslash($_POST['email_presse'])) :"",
                    'telefon_presse' => isset($_POST['telefon_presse']) ? sanitize_text_field(wp_unslash($_POST['telefon_presse'])):"",
                    'fax_presse' => isset($_POST['fax_presse']) ? sanitize_text_field(wp_unslash($_POST['fax_presse'])) : '',
                    'url_presse' => isset($_POST['url_presse'])? esc_url_raw(wp_unslash($_POST['url_presse'])):""
                );

                if (!$userEntry) {
                    $insertData = array_merge(array('blog_user_id' => (int) $_POST['blog_user_id']), $userContact);
                    $wpdb->insert($wpdb->prefix . 'b2s_user_contact', $insertData);
                } else {
                    $wpdb->update($wpdb->prefix . 'b2s_user_contact', $userContact, array('blog_user_id' => (int) $_POST['blog_user_id']));
                }
                echo json_encode(array('result' => true, 'error' => 0, 'type' => $type));
                wp_die();
            }
            echo json_encode(array('result' => false, 'error' => 2, 'type' => $type)); //NOTSHIP
            wp_die();
        }
        echo json_encode(array('result' => false, 'error' => 1, 'type' => $type)); //INVALIDDATA
        wp_die();
        
    }

    public function lockAutoPostImport() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['userId']) && (int) $_POST['userId'] > 0 && (int) $_POST['userId'] == B2S_PLUGIN_BLOG_USER_ID) {
                update_option('B2S_LOCK_AUTO_POST_IMPORT_' . B2S_PLUGIN_BLOG_USER_ID, 1, false);
                echo json_encode(array('result' => true));
                wp_die();
        }
        
    }

    public function prgLogin() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }
    
        if (isset($_POST['postId']) && (int) $_POST['postId'] > 0 && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $pubKey = json_decode(PRG_Api_Get::get(B2S_PLUGIN_PRG_API_ENDPOINT . 'auth.php?publicKey=true', array()));
            if (!empty($pubKey) && is_object($pubKey) && isset($pubKey->publicKey) && !empty($pubKey->publicKey) && function_exists('openssl_public_encrypt')) {
                $usernameCrypted = '';
                $passwordCrypted = '';
                openssl_public_encrypt(trim(sanitize_text_field(wp_unslash($_POST['username']))), $usernameCrypted, $pubKey->publicKey);
                openssl_public_encrypt(trim(sanitize_text_field(wp_unslash($_POST['password']))), $passwordCrypted, $pubKey->publicKey);
                $datas = array(
                    'action' => 'loginPRG',
                    'username' => base64_encode($usernameCrypted),
                    'password' => base64_encode($passwordCrypted),
                );
                $result = json_decode(trim(PRG_Api_Post::post(B2S_PLUGIN_PRG_API_ENDPOINT . 'auth.php', $datas)));
                if (!empty($result) && is_object($result) && isset($result->prg_token) && !empty($result->prg_token) && isset($result->prg_id) && !empty($result->prg_id)) {
                    if ((int) $result->prg_id > 0) {
                        $prgInfo = array('B2S_PRG_ID' => $result->prg_id,
                            'B2S_PRG_TOKEN' => $result->prg_token);

                        update_option('B2S_PLUGIN_PRG_' . B2S_PLUGIN_BLOG_USER_ID, $prgInfo, false);
                        echo json_encode(array('result' => true, 'error' => 0));
                        wp_die();
                    }
                }
                echo json_encode(array('result' => false, 'error' => 1));
                wp_die();
            }
            echo json_encode(array('result' => false, 'error' => 2)); //SSL ERRROR
            wp_die();
        }
        echo json_encode(array('result' => false, 'error' => 1));
        wp_die();
    }

    public function prgLogout() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        delete_option('B2S_PLUGIN_PRG_' . B2S_PLUGIN_BLOG_USER_ID);
        echo json_encode(array('result' => true));
        wp_die();
       
    }

    public function saveShipData() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            require_once (B2S_PLUGIN_DIR . 'includes/B2S/Ship/Save.php');
            $post = $_POST;
            $metaOg = false;
            $metaCard = false;

            if (!isset($post['b2s']) || !is_array($post['b2s']) || !isset($post['post_id']) || (int) $post['post_id'] == 0) {
                echo json_encode(array('result' => false));
                wp_die();
            }

            $b2sShipSend = new B2S_Ship_Save();

            delete_option('B2S_PLUGIN_POST_META_TAGES_TWITTER_' . (int) $post['post_id']);
            delete_option('B2S_PLUGIN_POST_META_TAGES_OG_' . (int) $post['post_id']);

            $content = array();
            $schedResult = array();
            $countDirectPost = 0;
            $countNetworkXIntegration = 0;

            $defaultPostData = array('token' => B2S_PLUGIN_TOKEN,
                'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                'post_id' => (int) $post['post_id'],
                'is_video' => (isset($post['is_video']) ? (int) $post['is_video'] : 0),
                'video_upload_size' => (isset($post['video_upload_size']) ? sanitize_text_field($post['video_upload_size']) : 0),
                'default_titel' => isset($post['default_titel']) ? sanitize_text_field($post['default_titel']) : '',
                'no_cache' => 0, //default inactive , 1=active 0=not
                'lang' => trim(strtolower(substr(B2S_LANGUAGE, 0, 2))));

            foreach ($post['b2s'] as $networkAuthId => $data) {
               
                if (!isset($data['network_id'])) {
                    continue;
                }
                if (isset($post['is_video']) && (int) $post['is_video'] == 1) {
                    $data['post_format'] = 2; //video
                } else {
                    if ((int) $data['network_id'] == 1 || (int) $data['network_id'] == 3 || (int) $data['network_id'] == 19) {
                        $linkNoCache = B2S_Tools::getNoCacheData(B2S_PLUGIN_BLOG_USER_ID);
                        if (is_array($linkNoCache) && isset($linkNoCache[$data['network_id']]) && (int) $linkNoCache[$data['network_id']] > 0) {
                            $defaultPostData['no_cache'] = (int) $linkNoCache[$data['network_id']];
                        }
                    }

                    //Change/Set MetaTags
                    if (in_array((int) $data['network_id'], json_decode(B2S_PLUGIN_NETWORK_META_TAGS, true)['og']) && $metaOg == false && (int) $post['post_id'] > 0 && isset($data['post_format']) && (int) $data['post_format'] == 0 && isset($post['change_og_meta']) && (int) $post['change_og_meta'] == 1) {  //LinkPost
                        $metaOg = true;
                        $meta = B2S_Meta::getInstance();
                        $meta->getMeta((int) $post['post_id']);
                        if (isset($data['og_title']) && !empty($data['og_title'])) {
                            $meta->setMeta('og_title', sanitize_text_field($data['og_title']));
                        }
                        if (isset($data['og_desc']) && !empty($data['og_desc'])) {
                            $meta->setMeta('og_desc', sanitize_text_field($data['og_desc']));
                        }
                        if (isset($data['image_url']) && !empty($data['image_url'])) {
                            $meta->setMeta('og_image', trim(esc_url_raw($data['image_url'])));
                            $meta->setMeta('og_image_alt', '');
                        }
                        $meta->updateMeta((int) $post['post_id']);
                        global $wpdb;
                        //NO User input in statement
                        // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
                        $res = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}b2s_posts LEFT JOIN {$wpdb->prefix}b2s_posts_sched_details ON {$wpdb->prefix}b2s_posts.sched_details_id = {$wpdb->prefix}b2s_posts_sched_details.id LEFT JOIN {$wpdb->prefix}b2s_posts_network_details ON {$wpdb->prefix}b2s_posts.network_details_id = {$wpdb->prefix}b2s_posts_network_details.id WHERE {$wpdb->prefix}b2s_posts.sched_details_id > 0 AND {$wpdb->prefix}b2s_posts.post_id = %d AND {$wpdb->prefix}b2s_posts_network_details.network_id IN (" . implode(',', json_decode(B2S_PLUGIN_NETWORK_META_TAGS, true)['og']) . ") AND sched_date_utc > %s", $post['post_id'], gmdate('Y-m-d H:i:s')));
                        foreach ($res as $key => $sched) {
                            $schedData = unserialize($sched->sched_data);
                            if ((isset($schedData['post_format']) && (int) $schedData['post_format'] == 0) || (!isset($schedData['post_format']) && isset($schedData['image_url']) && !empty($schedData['image_url']))) {
                                $schedData['image_url'] = $data['image_url'];
                                $wpdb->update($wpdb->prefix . 'b2s_posts_sched_details', array(
                                    'sched_data' => serialize($schedData),
                                    'image_url' => $data['image_url']
                                        ), array("id" => $sched->sched_details_id), array('%s', '%s', '%d'));
                            }
                        }
                    }

                    //Change/Set MetaTags
                    if (((int) $data['network_id'] == 2 || (int) $data['network_id'] == 24 || (int) $data['network_id'] == 45) && $metaCard == false && (int) $post['post_id'] > 0 && isset($data['post_format']) && (int) $data['post_format'] == 0 && isset($post['change_card_meta']) && (int) $post['change_card_meta'] == 1) {  //LinkPost
                        $metaCard = true;
                        $meta = B2S_Meta::getInstance();
                        $meta->getMeta((int) $post['post_id']);
                        if (isset($data['card_title']) && !empty($data['card_title'])) {
                            $meta->setMeta('card_title', sanitize_text_field($data['card_title']));
                        }
                        if (isset($data['card_desc']) && !empty($data['card_desc'])) {
                            $meta->setMeta('card_desc', sanitize_text_field($data['card_desc']));
                        }
                        if (isset($data['image_url']) && !empty($data['image_url'])) {
                            $meta->setMeta('card_image', trim(esc_url_raw($data['image_url'])));
                        }
                        $meta->updateMeta((int) $post['post_id']);
                    }

                    //TOS XING Group
                    if (isset($data['network_tos_group_id']) && !empty($data['network_tos_group_id'])) {
                        $options = new B2S_Options(0, 'B2S_PLUGIN_TOS_XING_GROUP_CROSSPOSTING');
                        $options->_setOption((int) $post['post_id'], $data['network_tos_group_id'], true);
                    }
                }

                //as there's a separate reels checkbox in the sched field and we don't want to use the wrong one, make a distinction
                $reel = 0;
                if (isset($data['releaseSelect']) && $data['releaseSelect'] == 0) {
                    $reel = isset($data['share_as_reel']) && !empty($data['share_as_reel']) ? (int) $data['share_as_reel'] : 0;
                } else if (isset($data['releaseSelect']) && $data['releaseSelect'] == 1) {
                    $reel = isset($data['sched_share_as_reel']) && !empty($data['sched_share_as_reel']) ? (int) $data['sched_share_as_reel'] : 0;
                }

                $sendData = array("board" => isset($data['board']) ? sanitize_text_field($data['board']) : '',
                    "status_privacy" => isset($data['status_privacy']) ? sanitize_text_field($data['status_privacy']) : '',
                    "group" => isset($data['group']) ? sanitize_text_field($data['group']) : '',
                    "custom_title" => isset($data['custom_title']) ? sanitize_text_field($data['custom_title']) : '',
                    "content" => (isset($data['content']) && !empty($data['content'])) ? strip_tags(preg_replace("/(<[\/]*)em(>)/", "$1i$2", html_entity_decode(sanitize_textarea_field(htmlentities($data['content'])))), '<p><h1><h2><br><i><b><a><img>') : '',
                    'share_as_reel' => $reel,
                    'url' => isset($data['url']) ? htmlspecialchars_decode(esc_url_raw($data['url'])) : '',
                    'image_url' => isset($data['image_url']) ? trim(esc_url_raw($data['image_url'])) : '',
                    'image_alt_text' => isset($data['image_alt_text']) ? trim(sanitize_text_field($data['image_alt_text'])) : '',
                    'video_url' => ((isset($post['is_video']) && (int) $post['is_video'] == 1 && isset($post['video_upload_url']) && !empty($post['video_upload_url'])) ? htmlspecialchars_decode(esc_url_raw($post['video_upload_url'])) : ''),
                    'video_size' => ((isset($post['is_video']) && (int) $post['is_video'] == 1 && isset($post['video_upload_size']) && !empty($post['video_upload_size'])) ? sanitize_text_field($post['video_upload_size']) : 0),
                    'tags' => isset($data['tags']) ? $data['tags'] : array(),
                    'network_id' => isset($data['network_id']) ? (int) $data['network_id'] : 0,
                    'instant_sharing' => isset($data['instant_sharing']) ? (int) $data['instant_sharing'] : 0,
                    'network_tos_group_id' => (isset($data['network_tos_group_id']) && !empty($data['network_tos_group_id'])) ? trim(sanitize_text_field($data['network_tos_group_id'])) : '',
                    'network_type' => isset($data['network_type']) ? (int) $data['network_type'] : '',
                    'network_kind' => isset($data['network_kind']) ? (int) $data['network_kind'] : 0,
                    'marketplace_category' => isset($data['marketplace_category']) ? (int) $data['marketplace_category'] : 0,
                    'marketplace_type' => isset($data['marketplace_type']) ? (int) $data['marketplace_type'] : 0,
                    'network_display_name' => isset($data['network_display_name']) ? sanitize_text_field($data['network_display_name']) : '',
                    'network_auth_id' => $networkAuthId,
                    'post_format' => isset($data['post_format']) ? (int) $data['post_format'] : '',
                    'user_timezone' => isset($post['user_timezone']) ? (int) $post['user_timezone'] : 0,
                    'publish_date' => isset($post['publish_date']) ?  wp_date('Y-m-d H:i:s', strtotime(sanitize_text_field(wp_unslash($post['publish_date']))), new DateTimeZone(date_default_timezone_get())) :  wp_date('Y-m-d H:i:s', current_time('timestamp'), new DateTimeZone(date_default_timezone_get())),
                    'frame_color' => ((isset($data['frame_color']) && !empty($data['frame_color'])) ? sanitize_text_field($data['frame_color']) : '#ffffff'),
                    'share_as_story' => (isset($data['share_as_story']) && (int) $data['share_as_story'] == 1) ? (int) $data['share_as_story'] : 0,
                    'video_upload_api_share' => 1, //since 7.3.1
                );

                if (isset($post['is_video']) && (int) $post['is_video'] == 0) {
                    if ((isset($data['post_format']) && (int) $data['post_format'] == 1) || (int) $data['network_id'] == 12 || (int) $data['network_id'] == 36) { //Case IG + TK
                        $multi_images = array();
                        if (isset($data['multi_image_1']) && !empty($data['multi_image_1'])) {
                            array_push($multi_images, $data['multi_image_1']);
                        }
                        if (isset($data['multi_image_2']) && !empty($data['multi_image_2'])) {
                            array_push($multi_images, $data['multi_image_2']);
                        }
                        if (isset($data['multi_image_3']) && !empty($data['multi_image_3'])) {
                            array_push($multi_images, $data['multi_image_3']);
                        }
                        if ((int) $data['network_id'] == 12 || (int) $data['network_id'] == 36) {
                            if (isset($data['multi_image_4']) && !empty($data['multi_image_4'])) {
                                array_push($multi_images, $data['multi_image_4']);
                            }
                            if (isset($data['multi_image_5']) && !empty($data['multi_image_5'])) {
                                array_push($multi_images, $data['multi_image_5']);
                            }
                            if (isset($data['multi_image_6']) && !empty($data['multi_image_6'])) {
                                array_push($multi_images, $data['multi_image_6']);
                            }
                            if (isset($data['multi_image_7']) && !empty($data['multi_image_7'])) {
                                array_push($multi_images, $data['multi_image_7']);
                            }
                            if (isset($data['multi_image_8']) && !empty($data['multi_image_8'])) {
                                array_push($multi_images, $data['multi_image_8']);
                            }
                            if (isset($data['multi_image_9']) && !empty($data['multi_image_9'])) {
                                array_push($multi_images, $data['multi_image_9']);
                            }
                        }
                        if (!empty($multi_images)) {
                            $sendData['multi_images'] = json_encode($multi_images);
                        }
                    }

                    //since V4.8.0 Check Relay and prepare Data
                    $relayData = array();
                    if (((int) $data['network_id'] == 2 || (int) $data['network_id'] == 45) && isset($data['post_relay_account'][0]) && !empty($data['post_relay_account'][0]) && isset($data['post_relay_delay'][0]) && !empty($data['post_relay_delay'][0])) {
                        $relayData = array('auth' => $data['post_relay_account'], 'delay' => $data['post_relay_delay']);
                    }
                }

                if (isset($post['is_video']) && $post['is_video'] == 1) {
                    $schedData = array();
                    if (isset($data['releaseSelect']) && (int) $data['releaseSelect'] == 1 && isset($data['date'][0]) && isset($data['time'][0])) {
                        $schedData = array(
                            'date' => isset($data['date']) ? $data['date'] : array(),
                            'time' => isset($data['time']) ? $data['time'] : array(),
                            'user_timezone' => isset($post['user_timezone']) ? sanitize_text_field(wp_unslash($post['user_timezone'])) : 0,
                            'releaseSelect' => isset($data['releaseSelect']) ? $data['releaseSelect'] : 0,
                            'sched_content' => isset($data['sched_content']) ? $data['sched_content'] : array(),
                            'saveSetting' => isset($data['saveSchedSetting']) ? true : false
                        );

                        if ($sendData['network_id'] == 45) {
                            $countNetworkXIntegration++;
                        }
                    }
                    $b2sShipSend->saveVideoDetails(array_merge($defaultPostData, $sendData), $schedData);
                } else {
                    //mode: share now
                    $schedData = array();
                    if (isset($data['releaseSelect']) && (int) $data['releaseSelect'] == 0) {
                        $b2sShipSend->savePublishDetails(array_merge($defaultPostData, $sendData), $relayData);
                        $countDirectPost++;
                        if ($sendData['network_id'] == 45) {
                            $countNetworkXIntegration++;
                        }
                        //mode: schedule custom once
                    } else if (isset($data['releaseSelect']) && (int) $data['releaseSelect'] == 1 && isset($data['date'][0]) && isset($data['time'][0])) {
                        $schedData = array(
                            'date' => isset($data['date']) ? $data['date'] : array(),
                            'time' => isset($data['time']) ? $data['time'] : array(),
                            'sched_content' => isset($data['sched_content']) ? $data['sched_content'] : array(),
                            'sched_image_url' => isset($data['sched_image_url']) ? $data['sched_image_url'] : array(),
                            'image_alt_text' => isset($data['image_alt_text']) ? $data['image_alt_text'] : "",
                            'sched_multi_image_1' => isset($data['sched_multi_image_1']) ? $data['sched_multi_image_1'] : array(),
                            'sched_multi_image_2' => isset($data['sched_multi_image_2']) ? $data['sched_multi_image_2'] : array(),
                            'sched_multi_image_3' => isset($data['sched_multi_image_3']) ? $data['sched_multi_image_3'] : array(),
                            'sched_multi_image_4' => isset($data['sched_multi_image_4']) ? $data['sched_multi_image_4'] : array(),
                            'sched_multi_image_5' => isset($data['sched_multi_image_5']) ? $data['sched_multi_image_5'] : array(),
                            'sched_multi_image_6' => isset($data['sched_multi_image_6']) ? $data['sched_multi_image_6'] : array(),
                            'sched_multi_image_7' => isset($data['sched_multi_image_7']) ? $data['sched_multi_image_7'] : array(),
                            'sched_multi_image_8' => isset($data['sched_multi_image_8']) ? $data['sched_multi_image_8'] : array(),
                            'sched_multi_image_9' => isset($data['sched_multi_image_9']) ? $data['sched_multi_image_9'] : array(),
                            'releaseSelect' => isset($data['releaseSelect']) ? $data['releaseSelect'] : 0,
                            'user_timezone' => isset($post['user_timezone']) ? sanitize_text_field(wp_unslash($post['user_timezone'])) : 0,
                            'saveSetting' => isset($data['saveSchedSetting']) ? true : false
                        );
                        $schedResult[] = $b2sShipSend->saveSchedDetails(array_merge($defaultPostData, $sendData), $schedData, $relayData);
                        $content = array_merge($content, $schedResult);

                        if ($sendData['network_id'] == 45) {
                            $countNetworkXIntegration++;
                        }

                        //mode: recurrently schedule
                    } else {
                        $schedData = array(
                            'interval_select' => isset($data['intervalSelect']) ? $data['intervalSelect'] : array(),
                            'duration_month' => isset($data['duration_month']) ? $data['duration_month'] : array(),
                            'select_day' => isset($data['select_day']) ? $data['select_day'] : array(),
                            'duration_time' => isset($data['duration_time']) ? $data['duration_time'] : array(),
                            'select_timespan' => isset($data['select_timespan']) ? $data['select_timespan'] : array(),
                            'weeks' => isset($data['weeks']) ? $data['weeks'] : 0,
                            'date' => isset($data['date']) ? $data['date'] : array(),
                            'time' => isset($data['time']) ? $data['time'] : array(),
                            'mo' => isset($data['mo']) ? $data['mo'] : array(),
                            'di' => isset($data['di']) ? $data['di'] : array(),
                            'mi' => isset($data['mi']) ? $data['mi'] : array(),
                            'do' => isset($data['do']) ? $data['do'] : array(),
                            'fr' => isset($data['fr']) ? $data['fr'] : array(),
                            'sa' => isset($data['sa']) ? $data['sa'] : array(),
                            'so' => isset($data['so']) ? $data['so'] : array(),
                            'releaseSelect' => isset($data['releaseSelect']) ? $data['releaseSelect'] : 0,
                            'user_timezone' => isset($post['user_timezone']) ? sanitize_text_field(wp_unslash($post['user_timezone'])) : 0,
                            'saveSetting' => isset($data['saveSchedSetting']) ? true : false
                        );
                        $schedResult[] = $b2sShipSend->saveSchedDetails(array_merge($defaultPostData, $sendData), $schedData, $relayData);
                        $content = array_merge($content, $schedResult);

                        if ($sendData['network_id'] == 45) {
                            $countNetworkXIntegration++;
                        }
                    }
                }
            }


            if (!empty($b2sShipSend->postDataApprove)) {
                $sendResult = $b2sShipSend->getShareApproveDetails();
                $content = array_merge($content, $sendResult);
            }

            if (!empty($b2sShipSend->postData)) {
                $sendResult = $b2sShipSend->postPublish();
                $content = array_merge($content, $sendResult);
            }

            //Licence Condition
            $currentOpenDailyLimit = 0;
            $currentOpenSchedLimit = 0;
            $currentNetwork45OpenDailyLimit = 0;
            $currentNetwork45OpenSchedLimit = 0;
            if (!isset($post['is_video']) || ((isset($post['is_video']) && (int) $post['is_video'] == 0))) {
                $tokenInfo = get_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID);
                if ($tokenInfo !== false && is_array($tokenInfo) && !empty($tokenInfo)) {
                    if (isset($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']) && isset($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota']) && isset($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'])) {
                        if (B2S_PLUGIN_USER_VERSION > 0 && !empty($schedResult)) {
                            $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) - count($schedResult);
                        }
                        //Type direct Post
                        if ($countDirectPost > 0) {
                            if (B2S_PLUGIN_USER_VERSION > 0) {
                                $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) - $countDirectPost;
                            }
                            $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota'] = ($tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota']) - $countDirectPost;
                        }
                        $currentOpenDailyLimit = (int) $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_daily_post_quota'];
                        $currentOpenSchedLimit = (B2S_PLUGIN_USER_VERSION > 0) ? (int) $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] : $currentOpenDailyLimit;
                        update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $tokenInfo, false);
                    }

                    if ($countNetworkXIntegration > 0) {
                        if (isset($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION']) && isset($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]) && !empty($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45])) {
                            $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota = ($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota) - (int) $countNetworkXIntegration;
                            $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_daily_post_quota = ($tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_daily_post_quota) - (int) $countNetworkXIntegration;
                            $currentNetwork45OpenDailyLimit = (int) $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_daily_post_quota;
                            $currentNetwork45OpenSchedLimit = (int) $tokenInfo['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota;
                            update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $tokenInfo, false);
                        }
                    }
                }
            }
            echo json_encode(array('result' => true, 'currentNetwork45OpenDailyLimit' => $currentNetwork45OpenDailyLimit, 'currentNetwork45OpenSchedLimit' => $currentNetwork45OpenSchedLimit, 'currentOpenDailyLimit' => $currentOpenDailyLimit, 'currentOpenSchedLimit' => $currentOpenSchedLimit, 'content' => $content));
            wp_die();
    }

    public function saveSocialMetaTags() {

        if (!current_user_can('administrator') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        $result = array('result' => true);
        $options = new B2S_Options(0, 'B2S_PLUGIN_GENERAL_OPTIONS');
        $og_active = (!isset($_POST['b2s_og_active'])) ? 0 : 1;
        $options->_setOption('og_active', $og_active);
        $options->_setOption('og_default_title', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_default_title'])) ? sanitize_text_field(wp_unslash($_POST['b2s_og_default_title'])) : ''));
        $options->_setOption('og_default_desc', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_default_desc'])) ? sanitize_text_field(wp_unslash($_POST['b2s_og_default_desc'])) : ''));
        $options->_setOption('og_default_image', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_default_image'])) ? esc_url_raw(wp_unslash($_POST['b2s_og_default_image'])) : ''));
        $options->_setOption('og_imagedata_active', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_imagedata_active'])) ? (int) $_POST['b2s_og_imagedata_active'] : 1));
        $options->_setOption('og_objecttype_active', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_objecttype_active'])) ? (int) $_POST['b2s_og_objecttype_active'] : 1));
        $options->_setOption('og_locale_active', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_locale_active'])) ? (int) $_POST['b2s_og_locale_active'] : 1));
        $options->_setOption('og_locale', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_og_locale']))  ? sanitize_text_field(wp_unslash($_POST['b2s_og_locale'])) : ''));

        $card_active = (!isset($_POST['b2s_card_active'])) ? 0 : 1;
        $options->_setOption('card_active', $card_active);
        $options->_setOption('card_default_type', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_card_default_type'])) ? sanitize_text_field(wp_unslash($_POST['b2s_card_default_type'])) : 0));
        $options->_setOption('card_default_title', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_card_default_title'])) ? sanitize_text_field(wp_unslash($_POST['b2s_card_default_title'])) : ''));
        $options->_setOption('card_default_desc', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_card_default_desc'])) ? sanitize_text_field(wp_unslash($_POST['b2s_card_default_desc'])) : ''));
        $options->_setOption('card_default_image', ((B2S_PLUGIN_USER_VERSION >= 1 && isset($_POST['b2s_card_default_image'])) ? esc_url_raw(wp_unslash($_POST['b2s_card_default_image'])) : ''));

        $oembed_active = (!isset($_POST['b2s_oembed_active'])) ? 0 : 1;
        $options->_setOption('oembed_active', $oembed_active);

        $meta = B2S_Meta::getInstance();
        $result['b2s'] = ($card_active == 1 || $og_active == 1) ? true : false;
        $result['yoast'] = $meta->is_yoast_seo_active();
        $result['aioseop'] = $meta->is_aioseop_active();
        $result['webdados'] = $meta->is_webdados_active();

        echo json_encode($result);
        wp_die();
        
    }

    public function resetSocialMetaTags() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        global $wpdb;
        $meta_key = '_b2s_post_meta';
        $table = esc_sql($wpdb->postmeta); 
        // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
        $wpdb->query($wpdb->prepare("DELETE FROM {$table} WHERE meta_key = %s",$meta_key));
        echo json_encode(array('result' => true));
        wp_die();
       
    }

    public function saveNetworkBoardAndGroup() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
        }

        if (isset($_POST['networkAuthId']) && !empty($_POST['networkAuthId']) && isset($_POST['networkType']) && isset($_POST['boardAndGroup']) && !empty($_POST['boardAndGroup']) && isset($_POST['networkId']) && !empty($_POST['networkId']) && isset($_POST['lang']) && !empty($_POST['lang'])) {
            $post = array('token' => B2S_PLUGIN_TOKEN,
                'action' => 'saveNetworkBoardAndGroup',
                'networkAuthId' => (int) $_POST['networkAuthId'],
                'networkType' => (int) $_POST['networkType'],
                'networkId' => (int) $_POST['networkId'],
                'boardAndGroup' => sanitize_text_field(wp_unslash($_POST['boardAndGroup'])),
                'boardAndGroupName' => (isset($_POST['boardAndGroupName']) && !empty($_POST['boardAndGroupName'])) ? trim(sanitize_text_field(wp_unslash($_POST['boardAndGroupName']))) : '',
                'lang' => sanitize_text_field(wp_unslash($_POST['lang'])));
            $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
            if ($result->result == true) {
                echo json_encode(array('result' => true));
                wp_die();
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function saveUserNetworkSettings() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['short_url'])) {
            $post = array('token' => B2S_PLUGIN_TOKEN,
                'action' => 'saveSettings',
                'short_url' => (int) $_POST['short_url']);
            $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
            if ($result->result == true) {
                echo json_encode(array('result' => true, 'content' => (((int) $_POST['short_url'] >= 1) ? 0 : 1)));
                wp_die();
            }

            echo json_encode(array('result' => true, 'content' => (isset($_POST['short_url']) ? (int) $_POST['short_url'] : 0)));
            wp_die();
        }


        if (isset($_POST['shortener_account_auth_delete'])) {
            $post = array('token' => B2S_PLUGIN_TOKEN,
                'action' => 'saveSettings',
                'shortener_account_auth_delete' => (int) $_POST['shortener_account_auth_delete']);
            $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
            if ($result->result == true) {
                echo json_encode(array('result' => true));
                wp_die();
            }
            echo json_encode(array('result' => true));
            wp_die();
        }

        if (isset($_POST['allow_shortcode'])) {
            if ((int) $_POST['allow_shortcode'] == 1) {
                delete_option('B2S_PLUGIN_USER_ALLOW_SHORTCODE_' . B2S_PLUGIN_BLOG_USER_ID);
            } else {
                update_option('B2S_PLUGIN_USER_ALLOW_SHORTCODE_' . B2S_PLUGIN_BLOG_USER_ID, 1, false);
            }
            echo json_encode(array('result' => true, 'content' => (((int) $_POST['allow_shortcode'] == 1) ? 0 : 1)));
            wp_die();
        }

        if (B2S_PLUGIN_USER_VERSION >= 2) {
            if (isset($_POST['use_permalinks'])) {
                if ((int) $_POST['use_permalinks'] == 1) {
                    delete_option('B2S_PLUGIN_USER_USE_PERMALINKS_' . B2S_PLUGIN_BLOG_USER_ID);
                } else {
                    update_option('B2S_PLUGIN_USER_USE_PERMALINKS_' . B2S_PLUGIN_BLOG_USER_ID, 1, false);
                }
                echo json_encode(array('result' => true, 'content' => (((int) $_POST['use_permalinks'] == 1) ? 0 : 1)));
                wp_die();
            }
        }

        if (isset($_POST['user_time_zone']) && !empty($_POST['user_time_zone'])) {
            $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
            $options->_setOption('user_time_zone', sanitize_text_field(wp_unslash($_POST['user_time_zone'])));
            echo json_encode(array('result' => true));
            wp_die();
        }

        if (isset($_POST['user_time_format']) && (int) $_POST['user_time_format'] >= 0) {
            $user_time_format = 0;
            if ((int) $_POST['user_time_format'] > 0) {
                $user_time_format = 1;
            }
            $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
            $options->_setOption('user_time_format', (int) $user_time_format);
            echo json_encode(array('result' => true));
            wp_die();
        }

        if (isset($_POST['legacy_mode']) && current_user_can('administrator')) {
            $options = new B2S_Options(0, 'B2S_PLUGIN_GENERAL_OPTIONS');
            $options->_setOption('legacy_mode', (int) $_POST['legacy_mode']);

            if ((int) $_POST['legacy_mode'] >= 1) {
                $options->_setOption('og_active', 0);
                $options->_setOption('card_active', 0);
                $options->_setOption('oembed_active', 0);
            }

            echo json_encode(array('result' => true, 'content' => (((int) $_POST['legacy_mode'] == 1) ? 0 : 1)));
            wp_die();
        }
        echo json_encode(array('result' => false));
        wp_die();

    }

    public function saveAutoPostSettings() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }
        
        if (isset($_POST['b2s-import-auto-post']) && (int) $_POST['b2s-import-auto-post'] == 1 && !isset($_POST['b2s-import-auto-post-network-auth-id'])) {
            echo json_encode(array('result' => false, 'type' => 'no-auth-selected'));
            wp_die();
        }

        //Auto-Poster A
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $network_auth_id = isset($_POST['b2s-import-auto-post-network-auth-id']) && is_array($_POST['b2s-import-auto-post-network-auth-id']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-import-auto-post-network-auth-id'])) : array();
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $post_type = isset($_POST['b2s-import-auto-post-type-data']) && is_array($_POST['b2s-import-auto-post-type-data']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-import-auto-post-type-data'])) : array();
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $post_categories = isset($_POST['b2s-import-auto-post-categories-data']) && is_array($_POST['b2s-import-auto-post-categories-data']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-import-auto-post-categories-data'])) : array();
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $post_taxonomies = isset($_POST['b2s-import-auto-post-taxonomies-data']) && is_array($_POST['b2s-import-auto-post-taxonomies-data']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-import-auto-post-taxonomies-data'])) : array();

        $auto_post_import = array('active' => ((isset($_POST['b2s-import-auto-post']) && (int) $_POST['b2s-import-auto-post'] == 1) ? 1 : 0),
            'network_auth_id' => $network_auth_id,
            'ship_state' => ((isset($_POST['b2s-import-auto-post-time-state']) && (int) $_POST['b2s-import-auto-post-time-state'] == 1) ? 1 : 0),
            'ship_delay_time' =>isset($_POST['b2s-import-auto-post-time-data'])? (int) $_POST['b2s-import-auto-post-time-data']: 0,
            'post_filter' => ((isset($_POST['b2s-import-auto-post-filter']) && (int) $_POST['b2s-import-auto-post-filter'] == 1) ? 1 : 0),
            'post_type_state' => ((isset($_POST['b2s-import-auto-post-type-state']) && (int) $_POST['b2s-import-auto-post-type-state'] == 1) ? 1 : 0),
            'post_type' => $post_type,
            'post_categories_state' => ((isset($_POST['b2s-import-auto-post-categories-state']) && (int) $_POST['b2s-import-auto-post-categories-state'] == 1) ? 1 : 0),
            'post_categories' => $post_categories,
            'post_taxonomies_state' => ((isset($_POST['b2s-import-auto-post-taxonomies-state']) && (int) $_POST['b2s-import-auto-post-taxonomies-state'] == 1) ? 1 : 0),
            'post_taxonomies' => $post_taxonomies);

        $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $options->_setOption('auto_post_import', $auto_post_import);

        //Auto-Poster M
        $active = ((isset($_POST['b2s-manuell-auto-post']) && (int) $_POST['b2s-manuell-auto-post'] == 1) ? 1 : 0);
        $profile = ((isset($_POST['b2s-auto-post-profil-dropdown']) && (int) $_POST['b2s-auto-post-profil-dropdown'] > 0) ? (int) $_POST['b2s-auto-post-profil-dropdown'] : 0);
        $twitter = ((isset($_POST['b2s-auto-post-profil-dropdown-twitter']) && (int) $_POST['b2s-auto-post-profil-dropdown-twitter'] > 0) ? (int) $_POST['b2s-auto-post-profil-dropdown-twitter'] : 0);
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $publish = isset($_POST['b2s-settings-auto-post-publish']) && is_array($_POST['b2s-settings-auto-post-publish']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-settings-auto-post-publish'])) : array();
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $update = isset($_POST['b2s-settings-auto-post-update']) && is_array($_POST['b2s-settings-auto-post-update']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-settings-auto-post-update'])) : array();

        $echo = isset($_POST['b2s-auto-post-echo-setting']) ? (int) $_POST['b2s-auto-post-echo-setting'] : 0;
        $echoSetting = isset($_POST['b2s-auto-post-echo-dropdown']) ? (int) $_POST['b2s-auto-post-echo-dropdown'] : 0;
        $importTemplateSetting = isset($_POST['b2s-auto-post-import-template-setting']) ? (int) $_POST['b2s-auto-post-import-template-setting'] : 0;
        $delaySetting = isset($_POST['b2s-auto-post-delay-state']) ? (int) $_POST['b2s-auto-post-delay-state'] : 0;
        $delay = 0;
        if ($delaySetting == 1 && isset($_POST['b2s-auto-post-delay-time'])) {
            $delay = (int) $_POST['b2s-auto-post-delay-time'];
        }
        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $assignUser = isset($_POST['b2s-auto-post-assign-user-data']) && is_array($_POST['b2s-auto-post-assign-user-data']) ? B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-auto-post-assign-user-data'])) : array();
        $oldOptions = $options->_getOption('auto_post');
        if (isset($oldOptions['assignUser'])) {
            global $wpdb;
            foreach ($oldOptions['assignUser'] as $k => $userId) {
                if (!in_array($userId, $assignUser)) {
                    //delete assignment
                    $assignOptions = new B2S_Options($userId);
                    $assignAutoPostOptions = $assignOptions->_getOption('auto_post');
                    //delete $assignAutoPostOptions['assignProfile']
                    if (isset($assignAutoPostOptions['assignProfile']) && (int) $assignAutoPostOptions['assignProfile'] > 0) {
                        $assignToken = B2S_Tools::getTokenById($userId);
                        $post = array('token' => $assignToken,
                            'action' => 'deleteUserMandant',
                            'mandantId' => (int) $assignAutoPostOptions['assignProfile'],
                            'allow_delete' => true);
                        $deleteResult = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
                        if ($deleteResult->result == true) {
                            $wpdb->delete($wpdb->prefix . 'b2s_user_network_settings', array('mandant_id' => (int) $assignAutoPostOptions['assignProfile'], 'blog_user_id' => $userId), array('%d', '%d'));
                        }
                    }
                    $assignAutoPostOptions['assignBy'] = 0;
                    $assignAutoPostOptions['assignProfile'] = 0;
                    $assignAutoPostOptions['assignTwitter'] = 0;
                    $assignOptions->_setOption('auto_post', $assignAutoPostOptions);
                }
            }
        }

        $getProfileUserAuth = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, array('action' => 'getProfileUserAuth', 'token' => B2S_PLUGIN_TOKEN)));
        
        foreach ($assignUser as $k => $userId) {
            if (!isset($oldOptions['assignUser']) || !in_array($userId, $oldOptions['assignUser'])) {
                //assign Networkollektion and Networks
                $assignProfile = 0;
                $assignTwitter = 0;
                if (isset($getProfileUserAuth->result) && (int) $getProfileUserAuth->result == 1 && isset($getProfileUserAuth->data) && !empty($getProfileUserAuth->data) && isset($getProfileUserAuth->data->mandant) && isset($getProfileUserAuth->data->auth) && !empty($getProfileUserAuth->data->mandant) && !empty($getProfileUserAuth->data->auth)) {
                    $mandant = $getProfileUserAuth->data->mandant;
                    $auth = $getProfileUserAuth->data->auth;
                    foreach ($mandant as $k => $m) {
                        if ((int) $m->id == (int) $profile) {
                            require_once (B2S_PLUGIN_DIR . 'includes/B2S/Network/Save.php');
                            $assignToken = B2S_Tools::getTokenById($userId);
                            $mandantResult = B2S_Network_Save::saveUserMandant(esc_html((($m->id == 0) ? __("My Profile", 'blog2social') : $m->name)), false, $assignToken);
                            if ($mandantResult['result'] == true && (int) $mandantResult['mandantId'] > 0) {
                                $assignProfile = $mandantResult['mandantId'];
                            }
                            if ((int) $assignProfile > 0) {
                                $profilData = (isset($auth->{$m->id}) && isset($auth->{$m->id}[0]) && !empty($auth->{$m->id}[0])) ? $auth->{$m->id} : array();
                                foreach ($profilData as $k => $networkAuth) {
                                    if (isset($networkAuth->networkAuthId) && (int) $networkAuth->networkAuthId > 0) {
                                        $data = array('action' => 'approveUserAuth', 'token' => B2S_PLUGIN_TOKEN, 'networkAuthId' => (int) $networkAuth->networkAuthId, 'assignToken' => $assignToken, 'tokenBlogUserId' => B2S_PLUGIN_BLOG_USER_ID, 'assignTokenBlogUserId' => $userId, 'allow_delete' => false, 'mandantId' => $assignProfile);
                                        $assignUserAuth = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $data, 30), true);
                                        if (isset($assignUserAuth['result']) && $assignUserAuth['result'] == true && isset($assignUserAuth['assign_network_auth_id']) && (int) $assignUserAuth['assign_network_auth_id'] > 0) {
                                            global $wpdb;
                                            $networkAuthIdExist = $wpdb->get_row($wpdb->prepare("SELECT * FROM `{$wpdb->prefix}b2s_posts_network_details` WHERE `network_auth_id` = %d", (int) $assignUserAuth['assign_network_auth_id']));
                                            if (empty($networkAuthIdExist) || !isset($networkAuthIdExist->id)) {
                                                //Insert
                                                $wpdb->query($wpdb->prepare("INSERT INTO `{$wpdb->prefix}b2s_posts_network_details` (`network_id`, `network_type`,`network_auth_id`,`network_display_name`,`owner_blog_user_id`) VALUES (%d,%d,%d,%s,%d);", (int) $assignUserAuth['assign_network_id'], $assignUserAuth['assign_network_type'], (int) $assignUserAuth['assign_network_auth_id'], $assignUserAuth['assign_network_display_name'], B2S_PLUGIN_BLOG_USER_ID));
                                            } else {
                                                //Update
                                                $wpdb->query($wpdb->prepare("UPDATE `{$wpdb->prefix}b2s_posts_network_details` SET `network_id` = %d, `network_type` = %d, `network_auth_id` = %d, `network_display_name` = %s, `owner_blog_user_id` = %d WHERE `network_auth_id` = %d;", (int) $assignUserAuth['assign_network_id'], $assignUserAuth['assign_network_type'], (int) $assignUserAuth['assign_network_auth_id'], $assignUserAuth['assign_network_display_name'], (int) $assignUserAuth['assign_network_auth_id'], B2S_PLUGIN_BLOG_USER_ID));
                                            }
                                            $wpdb->insert($wpdb->prefix . 'b2s_user_network_settings', array('blog_user_id' => (int) $userId, 'mandant_id' => $assignProfile, 'network_auth_id' => (int) $assignUserAuth['assign_network_auth_id']), array('%d', '%d', '%d'));
                                        }
                                        if ((int) $networkAuth->networkAuthId == (int) $twitter && isset($assignUserAuth['assign_network_auth_id']) && (int) $assignUserAuth['assign_network_auth_id'] > 0) {
                                            $assignTwitter = (int) $assignUserAuth['assign_network_auth_id'];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

                if ((int) $assignProfile > 0) {
                    //save flag in user autopost options
                    $assignOptions = new B2S_Options($userId);
                    $assignAutoPostOptions = $assignOptions->_getOption('auto_post');
                    $assignAutoPostOptions['assignBy'] = B2S_PLUGIN_BLOG_USER_ID;
                    $assignAutoPostOptions['assignProfile'] = $assignProfile;
                    $assignAutoPostOptions['assignTwitter'] = $assignTwitter;
                    $assignOptions->_setOption('auto_post', $assignAutoPostOptions);
                } else {
                    unset($assignUser[$k]);
                }
            }
        }

        $auto_post = array('active' => $active, 'profile' => $profile, 'twitter' => $twitter, 'publish' => $publish, 'update' => $update, 'assignUser' => $assignUser, 'echo' => (($echo > 0) ? $echoSetting : 0), 'import_template' => $importTemplateSetting, 'delay' => $delay, 'delay_state' => $delaySetting);
        $options->_setOption('auto_post', $auto_post);
        echo json_encode(array('result' => true));
        wp_die();
       
    }

    public function autoPostAssignByDisconnect() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $auto_post_options = $options->_getOption('auto_post');

        //delete assignProfile
        if (isset($auto_post_options['assignProfile']) && (int) $auto_post_options['assignProfile'] > 0) {
            $post = array('token' => B2S_PLUGIN_TOKEN,
                'action' => 'deleteUserMandant',
                'mandantId' => (int) $auto_post_options['assignProfile'],
                'allow_delete' => true);
            $deleteResult = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
            if ($deleteResult->result == true) {
                global $wpdb;
                $wpdb->delete($wpdb->prefix . 'b2s_user_network_settings', array('mandant_id' => (int) $auto_post_options['assignProfile'], 'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID), array('%d', '%d'));
            }
        }

        $assignById = $auto_post_options['assignBy'];
        $auto_post_options['assignBy'] = 0;
        $auto_post_options['assignProfile'] = 0;
        $auto_post_options['assignTwitter'] = 0;
        $options->_setOption('auto_post', $auto_post_options);

        $assignByoptions = new B2S_Options($assignById);
        $assign_by_auto_post_options = $assignByoptions->_getOption('auto_post');
        $assignUserArray = $assign_by_auto_post_options['assignUser'];
        foreach ($assignUserArray as $k => $userId) {
            if ($userId == B2S_PLUGIN_BLOG_USER_ID) {
                unset($assignUserArray[$k]);
            }
        }
        $assign_by_auto_post_options['assignUser'] = $assignUserArray;
        $assignByoptions->_setOption('auto_post', $assign_by_auto_post_options);
        echo json_encode(array('result' => true));
        wp_die();
       
    }

    public function saveUserMandant() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . 'includes/B2S/Network/Save.php');
        $mandant = (isset($_POST['mandant']) && !empty($_POST['mandant'])) ? sanitize_text_field(wp_unslash($_POST['mandant'])) : '';
        if (empty($mandant)) {
            echo json_encode(array('result' => false, 'content' => ""));
            wp_die();
        }
        $mandantResult = B2S_Network_Save::saveUserMandant($mandant);
        echo json_encode(array('result' => $mandantResult['result'], 'mandantId' => $mandantResult['mandantId'], 'mandantName' => $mandantResult['mandantName'], 'content' => $mandantResult['content']));
        wp_die();
    
    }

    public function deleteUserMandant() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            if (isset($_POST['mandantId'])) {
                $post = array('token' => B2S_PLUGIN_TOKEN,
                    'action' => 'deleteUserMandant',
                    'mandantId' => (int) $_POST['mandantId']);
                $deleteResult = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
                if ($deleteResult->result == true) {
                    global $wpdb;
                    $wpdb->delete($wpdb->prefix . 'b2s_user_network_settings', array('mandant_id' => (int) $_POST['mandantId'], 'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID), array('%d', '%d'));
                    echo json_encode(array('result' => true, 'mandantId' => (int) $_POST['mandantId']));
                    wp_die();
                }
            }

            echo json_encode(array('result' => false, 'mandantId' => ''));
            wp_die();
    }

    public function deleteUserAuth() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            $assignList = array();
            require_once (B2S_PLUGIN_DIR . 'includes/B2S/Post/Tools.php');
            if (isset($_POST['networkAuthId']) && (int) $_POST['networkAuthId'] > 0 && isset($_POST['networkId']) && (int) $_POST['networkId'] > 0 && isset($_POST['networkType'])) {
                global $wpdb;
                if (isset($_POST['deleteSchedPost']) && (int) $_POST['deleteSchedPost'] == 1) {
                    $res = $wpdb->get_results($wpdb->prepare("SELECT b.id, b.post_id, b.post_for_approve, b.post_for_relay FROM {$wpdb->prefix}b2s_posts b LEFT JOIN {$wpdb->prefix}b2s_posts_network_details d ON (d.id = b.network_details_id) WHERE d.network_auth_id= %d AND b.hide = %d AND b.publish_date =%s", ((isset($_POST['assignNetworkAuthId']) && (int) $_POST['assignNetworkAuthId'] > 0) ? (int) $_POST['assignNetworkAuthId'] : (int) $_POST['networkAuthId']), 0, '0000-00-00 00:00:00'));
                    if (is_array($res) && !empty($res)) {
                        foreach ($res as $k => $row) {
                            if (isset($row->id) && (int) $row->id > 0) {
                                $hookAction = (isset($row->post_for_approve) && (int) $row->post_for_approve == 0) ? 3 : 0;   //since 4.9.1 Facebook Instant Sharing
                                $wpdb->update($wpdb->prefix . 'b2s_posts', array('hook_action' => $hookAction, 'hide' => 1), array('id' => (int) $row->id));
                                //is post for relay
                                if ((int) $row->post_for_relay == 1) {
                                    $relay = B2S_Post_Tools::getAllRelayByPrimaryPostId($row->id);
                                    if (is_array($relay) && !empty($relay)) {
                                        $relay = B2S_Tools::sanitize_array($relay);
                                        foreach ($relay as $item) {
                                            if (isset($item->id) && (int) $item->id > 0) {
                                                $wpdb->update($wpdb->prefix . 'b2s_posts', array('hook_action' => 3, 'hide' => 1), array('id' => $item->id));
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    //V5.5.0 Approve User > Business Version 
                    if (isset($_POST['assignList']) && !empty($_POST['assignList'])) {
                        $assignList = json_decode(sanitize_text_field(wp_unslash($_POST['assignList'])), true);
                        if (is_array($assignList) && !empty($assignList)) {
                            foreach ($assignList as $i => $assignAuthId) {
                                $res = $wpdb->get_results($wpdb->prepare("SELECT b.id, b.post_id, b.post_for_approve, b.post_for_relay FROM {$wpdb->prefix}b2s_posts b LEFT JOIN {$wpdb->prefix}b2s_posts_network_details d ON (d.id = b.network_details_id) WHERE d.network_auth_id= %d AND b.hide = %d AND b.publish_date =%s", $assignAuthId, 0, '0000-00-00 00:00:00'));
                                if (is_array($res) && !empty($res)) {
                                    foreach ($res as $k => $row) {
                                        if (isset($row->id) && (int) $row->id > 0) {
                                            $hookAction = (isset($row->post_for_approve) && (int) $row->post_for_approve == 0) ? 3 : 0;   //since 4.9.1 Facebook Instant Sharing
                                            $wpdb->update($wpdb->prefix . 'b2s_posts', array('hook_action' => $hookAction, 'hide' => 1), array('id' => (int) $row->id));
                                            //is post for relay
                                            if ((int) $row->post_for_relay == 1) {
                                                $relay = B2S_Post_Tools::getAllRelayByPrimaryPostId($row->id);
                                                if (is_array($relay) && !empty($relay)) {
                                                    foreach ($relay as $item) {
                                                        if (isset($item->id) && (int) $item->id > 0) {
                                                            $wpdb->update($wpdb->prefix . 'b2s_posts', array('hook_action' => 3, 'hide' => 1), array('id' => $item->id));
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                    B2S_Heartbeat::getInstance()->deleteSchedPost();
                    sleep(2);
                }
                $post = array('token' => B2S_PLUGIN_TOKEN,
                    'action' => 'deleteUserAuth',
                    'networkAuthId' => (int) $_POST['networkAuthId'],
                    'assignNetworkAuthId' => (isset($_POST['deleteAssignment']) && sanitize_text_field(wp_unslash($_POST['deleteAssignment'])) == 'all') ? sanitize_text_field(wp_unslash($_POST['deleteAssignment'])) : ((isset($_POST['assignNetworkAuthId']) && (int) $_POST['assignNetworkAuthId'] > 0) ? (int) $_POST['assignNetworkAuthId'] : 0));
                $deleteResult = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
                if ($deleteResult->result == true) {
                    $wpdb->delete($wpdb->prefix . 'b2s_user_network_settings', array('network_auth_id' => ((isset($_POST['assignNetworkAuthId']) && sanitize_text_field(wp_unslash($_POST['assignNetworkAuthId'])) != "all" && (int) $_POST['assignNetworkAuthId'] > 0) ? (int) $_POST['assignNetworkAuthId'] : (int) $_POST['networkAuthId']), 'blog_user_id' => ((isset($_POST['blogUserId']) && (int) $_POST['blogUserId'] > 0) ? (int) $_POST['blogUserId'] : B2S_PLUGIN_BLOG_USER_ID)), array('%d', '%d'));
                    if (is_array($assignList) && !empty($assignList)) {
                        foreach ($assignList as $blogUserId => $assignAuthId) {
                            $wpdb->delete($wpdb->prefix . 'b2s_user_network_settings', array('network_auth_id' => $assignAuthId, 'blog_user_id' => $blogUserId), array('%d', '%d'));
                        }
                    }
                    echo json_encode(array('result' => true, 'networkId' => (int) $_POST['networkId'], 'networkAuthId' => ((isset($_POST['assignNetworkAuthId']) && sanitize_text_field(wp_unslash($_POST['assignNetworkAuthId'])) != "all" && (int) $_POST['assignNetworkAuthId'] > 0) ? (int) $_POST['assignNetworkAuthId'] : (int) $_POST['networkAuthId'])));
                    wp_die();
                }
            }
            echo json_encode(array('result' => false, 'networkId' => 0, 'networkAuthId' => 0));
            wp_die();
    }

    public function updateUserVersion() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Tools.php');

        if (isset($_POST['key']) && !empty($_POST['key'])) {
            $isCurrentUser = true;
            if (isset($_POST['user_id']) && !empty($_POST['user_id']) && (int) $_POST['user_id'] != B2S_PLUGIN_BLOG_USER_ID) {
                $user_id = (int) $_POST['user_id'];
                $user_token = B2S_Tools::getTokenById($user_id);
                $isCurrentUser = false;
            } else {
                $user_id = B2S_PLUGIN_BLOG_USER_ID;
                $user_token = B2S_PLUGIN_TOKEN;
            }
            if ($user_token != false) {
                $currentDate = new DateTime("now", wp_timezone());

                $post = array('token' => $user_token,
                    'action' => 'updateUserVersion',
                    'version' => B2S_PLUGIN_VERSION,
                    'current_date' => $currentDate->format('Y-m-d'),
                    'key' => sanitize_text_field(wp_unslash($_POST['key'])));
                $keyResult = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
                if (isset($keyResult->result) && $keyResult->result == true) {
                    if ($isCurrentUser) {
                        $option = get_option('B2S_PLUGIN_USER_VERSION_' . $user_id);
                        $option['B2S_PLUGIN_USER_VERSION'] = $keyResult->version;
                        if (isset($keyResult->trail) && $keyResult->trail == true && isset($keyResult->trailEndDate) && $keyResult->trailEndDate != "") {
                            $option['B2S_PLUGIN_TRAIL_END'] = $keyResult->trailEndDate;
                        } else {
                            if (isset($option['B2S_PLUGIN_TRAIL_END'])) {
                                unset($option['B2S_PLUGIN_TRAIL_END']);
                            }
                        }
                        //has addon
                        if (isset($keyResult->addon->video)) {
                            $option['B2S_PLUGIN_ADDON_VIDEO'] = (array) $keyResult->addon->video;
                        } else {
                            if (isset($option['B2S_PLUGIN_ADDON_VIDEO'])) {
                                unset($option['B2S_PLUGIN_ADDON_VIDEO']);
                            }
                        }

                        if (isset($keyResult->addon->app)) {
                            $appQuantity = unserialize(B2S_PLUGIN_DEFAULT_USER_APP_QUANTITY);
                            $quantity = isset($appQuantity[$keyResult->version]) ? $appQuantity[$keyResult->version] : 1;

                            if (isset($keyResult->trail) && $keyResult->trail == true) {
                                $quantity = 1;
                            }
                            $network_quantities = array();
                            foreach (unserialize(B2S_PLUGIN_USER_APP_NETWORKS) as $network) {
                                $network_quantities[$network] = $quantity;
                            }
                            foreach ($keyResult->addon->app as $network_id => $entry) {
                                foreach ($entry as $individual_addon) {
                                    if (isset($individual_addon->volume_total)) {
                                        $network_quantities[$network_id] = (int) $network_quantities[$network_id] + (int) $individual_addon->volume_total;
                                    }
                                }
                            }
                            $option['B2S_PLUGIN_ALLOWED_USER_APPS'] = serialize($network_quantities);
                        } else {
                            if (isset($option['B2S_PLUGIN_ALLOWED_USER_APPS'])) {
                                unset($option['B2S_PLUGIN_ALLOWED_USER_APPS']);
                            }
                        }


                        if (isset($keyResult->licence_condition)) {
                            $option['B2S_PLUGIN_LICENCE_CONDITION'] = (array) $keyResult->licence_condition;
                        }
                        if (isset($keyResult->network_condition)) {
                            $option['B2S_PLUGIN_NETWORK_CONDITION'] = (array) $keyResult->network_condition;
                        }

                        update_option('B2S_PLUGIN_USER_VERSION_' . $user_id, $option, false);
                        $licenseName = unserialize(B2S_PLUGIN_VERSION_TYPE);
                        $printName = (isset($keyResult->trail) && $keyResult->trail == true) ? 'FREE-TRIAL' : $licenseName[$keyResult->version];
                    } else {
                        $tokenInfo = array();
                        $tokenInfo['B2S_PLUGIN_USER_VERSION'] = (isset($keyResult->version) ? $keyResult->version : 0);
                        $tokenInfo['B2S_PLUGIN_VERSION'] = B2S_PLUGIN_VERSION;
                        if (isset($keyResult->trail) && $keyResult->trail == true && isset($keyResult->trailEndDate) && $keyResult->trailEndDate != "") {
                            $tokenInfo['B2S_PLUGIN_TRAIL_END'] = $keyResult->trailEndDate;
                        } else {
                            if (isset($option['B2S_PLUGIN_TRAIL_END'])) {
                                unset($option['B2S_PLUGIN_TRAIL_END']);
                            }
                        }
                        //has addon
                        if (isset($keyResult->addon->video)) {
                            $tokenInfo['B2S_PLUGIN_ADDON_VIDEO'] = (array) $keyResult->addon->video;
                        } else {
                            if (isset($option['B2S_PLUGIN_ADDON_VIDEO'])) {
                                unset($option['B2S_PLUGIN_ADDON_VIDEO']);
                            }
                        }

                        if (isset($keyResult->addon->app)) {
                            $appQuantity = unserialize(B2S_PLUGIN_DEFAULT_USER_APP_QUANTITY);
                            $quantity = isset($appQuantity[$keyResult->version]) ? $appQuantity[$keyResult->version] : 1;

                            if (isset($keyResult->trail) && $keyResult->trail == true) {
                                $quantity = 1;
                            }
                            $network_quantities = array();
                            foreach (unserialize(B2S_PLUGIN_USER_APP_NETWORKS) as $network) {
                                $network_quantities[$network] = $quantity;
                            }
                            foreach ($keyResult->addon->app as $network_id => $entry) {
                                foreach ($entry as $individual_addon) {
                                    if (isset($individual_addon->volume_total)) {
                                        $network_quantities[$network_id] = (int) $network_quantities[$network_id] + (int) $individual_addon->volume_total;
                                    }
                                }
                            }
                            $tokenInfo['B2S_PLUGIN_ALLOWED_USER_APPS'] = serialize($network_quantities);
                        } else {
                            if (isset($option['B2S_PLUGIN_ALLOWED_USER_APPS'])) {
                                unset($option['B2S_PLUGIN_ALLOWED_USER_APPS']);
                            }
                        }

                        if (isset($keyResult->licence_condition)) {
                            $tokenInfo['B2S_PLUGIN_LICENCE_CONDITION'] = (array) $keyResult->licence_condition;
                        }
                        if (isset($keyResult->network_condition)) {
                            $option['B2S_PLUGIN_NETWORK_CONDITION'] = (array) $keyResult->network_condition;
                        }

                        if (!isset($keyResult->version)) {
                            define('B2S_PLUGIN_NOTICE', 'CONNECTION');
                        } else {
                            $tokenInfo['B2S_PLUGIN_USER_VERSION_NEXT_REQUEST'] = time() + 3600;
                            update_option('B2S_PLUGIN_USER_VERSION_' . $user_id, $tokenInfo, false);
                        }
                        $printName = false;
                    }

                    echo json_encode(array('result' => true, 'licenseName' => $printName));
                    wp_die();
                } else if (isset($keyResult->reason)) {
                    echo json_encode(array('result' => false, 'reason' => $keyResult->reason));
                    wp_die();
                }
            } else {
                echo json_encode(array('result' => false, 'reason' => 2));
                wp_die();
            }
        }

        echo json_encode(array('result' => false, 'reason' => 0));
        wp_die();

    }

    public function acceptPrivacyPolicy() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            require_once (B2S_PLUGIN_DIR . '/includes/Tools.php');
            if (isset($_POST['accept'])) {
                $post = array('token' => B2S_PLUGIN_TOKEN,
                    'action' => 'updatePrivacyPolicy',
                    'version' => B2S_PLUGIN_VERSION);
                $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
                if ($result->result == true) {
                    echo json_encode(array('result' => true));
                    delete_option('B2S_PLUGIN_PRIVACY_POLICY_USER_ACCEPT_' . B2S_PLUGIN_BLOG_USER_ID);
                    wp_die();
                }
            }
            echo json_encode(array('result' => false));
            wp_die();
       
    }

    public function deleteUserPublishPost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Post/Tools.php');

        if (isset($_POST['postId']) && !empty($_POST['postId'])) {
            $postIds = explode(',', sanitize_text_field(wp_unslash($_POST['postId'])));
            if (is_array($postIds) && !empty($postIds)) {
                echo json_encode(B2S_Post_Tools::deleteUserPublishPost($postIds));
                wp_die();
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
      
    }

    public function activateAddonTrial() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        $type = (isset($_POST['type']) && $_POST['type'] == 'video') ? sanitize_text_field(wp_unslash($_POST['type'])) : 'video';
        require_once (B2S_PLUGIN_DIR . '/includes/Tools.php');
        $data = array('token' => B2S_PLUGIN_TOKEN,
            'action' => 'createAddonTrial',
            'type' => $type);
        $trailResult = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $data));
        if ($trailResult->result == true) {
            B2S_Tools::setUserDetails();
            echo json_encode(array('result' => true));
            wp_die();
        }
        echo json_encode(array('result' => false, 'error' => (isset($trailResult->error_reason) ? $trailResult->error_reason : 'invalid-data')));
        wp_die();
       
    }

    public function deleteUserApprovePost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Post/Tools.php');
        if (isset($_POST['postId']) && !empty($_POST['postId'])) {
            $postIds = explode(',', sanitize_text_field(wp_unslash($_POST['postId'])));
            if (is_array($postIds) && !empty($postIds)) {
                echo json_encode(B2S_Post_Tools::deleteUserApprovePost($postIds));
                wp_die();
            }
        }

        echo json_encode(array('result' => false));
        wp_die();
       
    }

    public function deleteUserCcDraftPost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['postId']) && !empty($_POST['postId']) && (int) $_POST['postId'] > 0) {
            $res = wp_update_post(array('ID' => (int) $_POST['postId'], 'post_status' => 'trash'), true);
            if ((int) $res > 0) {
                echo json_encode(array('result' => true, 'postId' => (int) $_POST['postId']));
                wp_die();
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
      
    }

    public function sendTrailFeedback() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Tools.php');

        if (isset($_POST['feedback']) && !empty($_POST['feedback'])) {
            $post = array('token' => B2S_PLUGIN_TOKEN,
                'action' => 'sendTrailFeedback',
                'feedback' => sanitize_textarea_field(wp_unslash($_POST['feedback'])));
            $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post));
            if ($result->result == true) {
                echo json_encode(array('result' => true));
                wp_die();
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
     
    }

    //NEW V5.1.0
    public function saveUserTimeSettings() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
        if (isset($_POST['b2s-user-sched-data']) && !empty($_POST['b2s-user-sched-data']) && isset($_POST['b2s-user-sched-data']['time']) && isset($_POST['b2s-user-sched-data']['delay_day'])) {
            // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
            foreach (B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-user-sched-data']['time'])) as $k => $v) {
                    // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                $_POST['b2s-user-sched-data']['time'][$k] =  wp_date('H:i', strtotime( wp_date('Y-m-d', null, new DateTimeZone(date_default_timezone_get())) . ' ' . $v), new DateTimeZone(date_default_timezone_get()));
            }
            $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
            $options->_setOption('auth_sched_time', array('delay_day' => B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-user-sched-data']['delay_day'])), 'time' => B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-user-sched-data']['time']))));
            echo json_encode(array('result' => true));
            wp_die();
        }

        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function b2sShipNavbarSaveSettings() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['mandantId'])) {
            global $wpdb;
            $wpdb->delete($wpdb->prefix . 'b2s_user_network_settings', array('mandant_id' => (int) $_POST['mandantId'], 'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID), array('%d', '%d'));
                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only unsanitized in if condition
            if (isset($_POST['selectedAuth']) && is_array($_POST['selectedAuth'])) {
                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                $_POST['selectedAuth'] = B2S_Tools::sanitize_array(wp_unslash($_POST['selectedAuth']));
                // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                foreach (wp_unslash($_POST['selectedAuth']) as $k => $networkAuthId) {
                    $wpdb->insert($wpdb->prefix . 'b2s_user_network_settings', array('blog_user_id' => B2S_PLUGIN_BLOG_USER_ID, 'mandant_id' => (int) $_POST['mandantId'], 'network_auth_id' => $networkAuthId), array('%d', '%d', '%d'));
                }
            }
            echo json_encode(array('result' => true));
            wp_die();
        }
        
        echo json_encode(array('result' => false));
        wp_die();
       
    }

    public function saveAuthToSettings() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }   

        if (isset($_POST['mandandId']) && isset($_POST['networkAuthId']) && (int) $_POST['networkAuthId'] > 0 && isset($_POST['networkId']) && (int) $_POST['networkId'] > 0 && isset($_POST['networkType']) && isset($_POST['displayName']) && !empty($_POST['displayName'])) {
            global $wpdb;
            $networkDetailsIdSelect = $wpdb->get_col($wpdb->prepare("SELECT postNetworkDetails.id FROM {$wpdb->prefix}b2s_posts_network_details AS postNetworkDetails WHERE postNetworkDetails.network_auth_id = %s", sanitize_text_field(wp_unslash($_POST['networkAuthId']))));
            if (!isset($networkDetailsIdSelect[0])) {
                require_once (B2S_PLUGIN_DIR . '/includes/Util.php');
                $wpdb->insert($wpdb->prefix . 'b2s_posts_network_details', array(
                    'network_id' => (int) $_POST['networkId'],
                    'network_type' => (int) $_POST['networkType'],
                    'network_auth_id' => (int) $_POST['networkAuthId'],
                    'owner_blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                        // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Input is sanitized
                    'network_display_name' => sanitize_text_field(B2S_Util::remove4byte(wp_unslash($_POST['displayName'])))), array('%d', '%d', '%d', '%d', '%s'));
            }
            $mandantCount = $wpdb->get_var($wpdb->prepare("SELECT COUNT(mandant_id)FROM {$wpdb->prefix}b2s_user_network_settings  WHERE mandant_id =%d AND blog_user_id=%d ", (int) $_POST['mandandId'], B2S_PLUGIN_BLOG_USER_ID));
            if ($mandantCount > 0) {
                $wpdb->insert($wpdb->prefix . 'b2s_user_network_settings', array('blog_user_id' => B2S_PLUGIN_BLOG_USER_ID, 'mandant_id' => (int) $_POST['mandandId'], 'network_auth_id' => (int) $_POST['networkAuthId']), array('%d', '%d', '%d'));
            }
            echo json_encode(array('result' => true));
            wp_die();
        }
        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function b2sPostMailUpdate() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['email']) && !empty($_POST['email'])) {
            require_once (B2S_PLUGIN_DIR . '/includes/Tools.php');
            $post = array('action' => 'updateMail',
                'email' => isset($_POST['email'])? sanitize_text_field(wp_unslash($_POST['email'])): "",
                'lang' => isset($_POST['lang']) ? sanitize_text_field(wp_unslash($_POST['lang'])) : ""
            );

            B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $post);
            update_option('B2S_UPDATE_MAIL_' . B2S_PLUGIN_BLOG_USER_ID, sanitize_text_field($post['email']), false);
        }
        echo json_encode(array('result' => true));
        wp_die();
    
    }

    public function updateApprovePost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        //post_id
        if (isset($_POST['post_id']) && is_numeric($_POST['post_id']) && (int) $_POST['post_id'] > 0) {
            global $wpdb;
            require_once (B2S_PLUGIN_DIR . '/includes/Options.php');
            require_once (B2S_PLUGIN_DIR . '/includes/Util.php');
            $option = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
            $optionUserTimeZone = $option->_getOption('user_time_zone');
            $userTimeZone = ($optionUserTimeZone !== false) ? $optionUserTimeZone : get_option('timezone_string');
            $userTimeZoneOffset = (empty($userTimeZone)) ? get_option('gmt_offset') : B2S_Util::getOffsetToUtcByTimeZone($userTimeZone);
            $publishLink = (isset($_POST['publish_link']) && !empty($_POST['publish_link'])) ? sanitize_text_field(esc_url_raw(wp_unslash($_POST['publish_link']))) : '';
            $publishError = (isset($_POST['publish_error_code']) && !empty($_POST['publish_error_code'])) ? addslashes(sanitize_text_field(wp_unslash($_POST['publish_error_code']))) : '';

            $wpdb->query($wpdb->prepare("UPDATE {$wpdb->prefix}b2s_posts SET sched_date = %s, sched_date_utc= %s, publish_date = %s, publish_link = %s, publish_error_code = %s, post_for_approve = %d  WHERE id = %d",
                            '0000-00-00 00:00:00', '0000-00-00 00:00:00', B2S_Util::getbyIdentLocalDate($userTimeZoneOffset), $publishLink, $publishError, 0, (int) $_POST['post_id']));

            echo json_encode(array('result' => true));
            wp_die();
        }
    }

    public function b2sCalendarMovePost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        global $wpdb;
        if (isset($_POST['b2s_id']) && is_numeric($_POST['b2s_id']) && isset($_POST['sched_date']) && is_string($_POST['sched_date']) && isset($_POST['user_timezone'])) {
//since V4.9.1 Instant Share Approve - Facebook Profile
            
            $shareApprove = (isset($_POST['post_for_approve']) && (int) $_POST['post_for_approve'] == 1) ? 1 : 0;


            $wpdb->query($wpdb->prepare(
                    "UPDATE {$wpdb->prefix}b2s_posts "
                    . "SET sched_date = %s, "
                    . "user_timezone = %d, "
                    . "publish_date = '0000-00-00 00:00:00' ,"
                    . "sched_date_utc = %s, "
                    . "hook_action = %d "
                    . " WHERE id = %d",
                        wp_date('Y-m-d H:i:s', strtotime(sanitize_text_field(wp_unslash($_POST['sched_date']))), new DateTimeZone(date_default_timezone_get())),
                        (int) $_POST['user_timezone'],
                        B2S_Util::getUTCForDate(sanitize_text_field(wp_unslash($_POST['sched_date'])), (int) $_POST['user_timezone'] * -1),
                        (($shareApprove == 0) ? 2 : 0),
                        (int) $_POST['b2s_id']
            ));

            //is post for relay?
            if (isset($_POST['post_for_relay']) && (int) $_POST['post_for_relay'] == 1) {
                require_once (B2S_PLUGIN_DIR . 'includes/B2S/Post/Tools.php');
                $res = B2S_Post_Tools::getAllRelayByPrimaryPostId((int) $_POST['b2s_id']);
                if (is_array($res) && !empty($res)) {
                    foreach ($res as $item) {
                        if (isset($item->id) && (int) $item->id > 0 && isset($item->relay_delay_min) && (int) $item->relay_delay_min > 0) {
                            $relay_sched_date =  wp_date('Y-m-d H:i:00', strtotime("+" . $item->relay_delay_min . " minutes", strtotime(sanitize_text_field(wp_unslash($_POST['sched_date'])))), new DateTimeZone(date_default_timezone_get()));
                            $relay_sched_date_utc =  wp_date('Y-m-d H:i:00', strtotime(B2S_Util::getUTCForDate($relay_sched_date, (int) $_POST['user_timezone'] * (-1))), new DateTimeZone(date_default_timezone_get()));
                            $wpdb->update($wpdb->prefix . 'b2s_posts', array(
                                'user_timezone' => (int) $_POST['user_timezone'],
                                'publish_date' => "0000-00-00 00:00:00",
                                'sched_date' => $relay_sched_date,
                                'sched_date_utc' => $relay_sched_date_utc,
                                'hook_action' => 2
                                    ), array("id" => $item->id), array('%s', '%s', '%s', '%s', '%d'));
                        }
                    }
                }
            }
        }
        echo json_encode(array('result' => true));
        wp_die();
      
    }

    public function deleteUserSchedPost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Post/Tools.php');

        if (isset($_POST['postId']) && !empty($_POST['postId'])) {
            $postIds = explode(',', sanitize_text_field(wp_unslash($_POST['postId'])));
            if (is_array($postIds) && !empty($postIds)) {
                $delete = B2S_Post_Tools::deleteUserSchedPost($postIds);
                if ($delete['result'] == true) {
                    //Licence Condition
                    $currentOpenSchedLimit = 0;
                    if ((int) $delete['postCount'] > 0) {
                        $versionDetails = get_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID);
                        if ($versionDetails !== false && is_array($versionDetails) && !empty($versionDetails)) {
                            if (isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']) && isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'])) {
                                if ((int) $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] > 0) {
                                    $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) + $delete['postCount'];
                                    update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $versionDetails, false);
                                    $currentOpenSchedLimit = $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'];
                                }
                            }
                        }
                    }
                    echo json_encode(array('result' => true, 'currentOpenSchedLimit' => $currentOpenSchedLimit, 'postId' => $delete['postId'], 'postCount' => $delete['postCount'], 'blogPostId' => $delete['blogPostId']));
                    wp_die();
                }
            }
        }

        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function b2sDeletePost() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Post/Tools.php');

        if (isset($_POST['b2s_id']) && !empty($_POST['b2s_id']) && isset($_POST['post_id']) && !empty($_POST['post_id'])) {
            $postIds = array(sanitize_text_field(wp_unslash($_POST['b2s_id'])));
            if (is_array($postIds) && !empty($postIds)) {
                $delete = B2S_Post_Tools::deleteUserSchedPost($postIds);
                delete_option("B2S_PLUGIN_CALENDAR_BLOCKED_" . (int) $_POST['b2s_id']);
                delete_option('B2S_PLUGIN_POST_META_TAGES_TWITTER_' . (int) $_POST['post_id']);
                delete_option('B2S_PLUGIN_POST_META_TAGES_OG_' . (int) $_POST['post_id']);

                if ($delete['result'] == true) {
                    //Licence Condition
                    $currentOpenSchedLimit = 0;
                    if ((int) $delete['postCount'] > 0) {
                        $versionDetails = get_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID);
                        if ($versionDetails !== false && is_array($versionDetails) && !empty($versionDetails)) {
                            if (isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']) && isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'])) {
                                if ((int) $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] > 0) {
                                    $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) + $delete['postCount'];
                                    update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $versionDetails, false);
                                    $currentOpenSchedLimit = $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'];
                                }
                            }
                        }
                    }
                    echo json_encode(array('result' => true, 'currentOpenSchedLimit' => $currentOpenSchedLimit, 'postId' => $delete['postId'], 'postCount' => $delete['postCount'], 'blogPostId' => $delete['blogPostId']));
                    wp_die();
                }
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
     
    }

    public function b2sEditSavePost() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            global $wpdb;
            require_once (B2S_PLUGIN_DIR . 'includes/B2S/Calendar/Save.php');

            $post = $_POST;
            $metaOg = false;
            $metaCard = false;
            $sched_date = '';

            if (!isset($post['post_id']) || (int) $post['post_id'] == 0) {
                echo json_encode(array('result' => false));
                wp_die();
            }

            $b2sids = array($post['b2s_id']);
            delete_option('B2S_PLUGIN_POST_META_TAGES_TWITTER_' . (int) $post['post_id']);
            delete_option('B2S_PLUGIN_POST_META_TAGES_OG_' . (int) $post['post_id']);

            foreach ($b2sids as $b2s_id) {
                $b2sShipSend = new B2S_Calendar_Save();

                $defaultPostData = array(
                    'original_blog_user_id' => (int) $post['original_blog_user_id'],
                    'last_edit_blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                    'post_id' => (int) $post['post_id'],
                    'b2s_id' => (int) $b2s_id,
                    'default_titel' => isset($post['default_titel']) ? sanitize_text_field($post['default_titel']) : '',
                    'no_cache' => 0, //default inactive , 1=active 0=not
                    'lang' => trim(strtolower(substr(B2S_LANGUAGE, 0, 2))));

//is relay post?
                if (isset($post['relay_primary_post_id']) && (int) $post['relay_primary_post_id'] > 0 && (int) $b2s_id > 0) {
                    if (isset($post['relay_primary_sched_date']) && !empty($post['relay_primary_sched_date']) && isset($post['network_auth_id']) && (int) $post['network_auth_id'] > 0) {
                        if (isset($post['b2s'][$post['network_auth_id']]['post_relay_delay'][0]) && (int) $post['b2s'][$post['network_auth_id']]['post_relay_delay'][0] > 0) {
                            $sched_date =  wp_date('Y-m-d H:i:00', strtotime("+" . $post['b2s'][$post['network_auth_id']]['post_relay_delay'][0] . " minutes", strtotime($post['relay_primary_sched_date'])), new DateTimeZone(date_default_timezone_get()));
                            $sched_date_utc =  wp_date('Y-m-d H:i:00', strtotime(B2S_Util::getUTCForDate($sched_date, (int) $post['user_timezone'] * (-1))), new DateTimeZone(date_default_timezone_get()));
                            $wpdb->update($wpdb->prefix . 'b2s_posts', array(
                                'user_timezone' => (int) $post['user_timezone'],
                                'publish_date' => "0000-00-00 00:00:00",
                                'sched_date' => $sched_date,
                                'sched_date_utc' => $sched_date_utc,
                                'hook_action' => 2
                                    ), array("id" => $b2s_id), array('%s', '%s', '%s', '%s', '%d'));
                            $sched_date = B2S_Util::getCustomDateFormat( wp_date('Y-m-d H:i:00', strtotime($sched_date), new DateTimeZone(date_default_timezone_get())), substr(B2S_LANGUAGE, 0, 2));
                        }
                    }
                } else {

                    foreach ($post['b2s'] as $networkAuthId => $data) {
                        if (!isset($data['url']) || !isset($data['content']) || !isset($data['network_id'])) {
                            continue;
                        }

                        if ((int) $data['network_id'] == 1 || (int) $data['network_id'] == 3 || (int) $data['network_id'] == 19) {
                            $linkNoCache = B2S_Tools::getNoCacheData(B2S_PLUGIN_BLOG_USER_ID);
                            if (is_array($linkNoCache) && isset($linkNoCache[$data['network_id']]) && (int) $linkNoCache[$data['network_id']] > 0) {
                                $defaultPostData['no_cache'] = $linkNoCache[$data['network_id']];
                            }
                        }

//Change/Set MetaTags
                        if (in_array((int) $data['network_id'], json_decode(B2S_PLUGIN_NETWORK_META_TAGS, true)['og']) && $metaOg == false && (int) $post['post_id'] > 0 && isset($data['post_format']) && (int) $data['post_format'] == 0 && isset($post['change_og_meta']) && (int) $post['change_og_meta'] == 1) {  //LinkPost
                            $metaOg = true;
                            $meta = B2S_Meta::getInstance();
                            $res = $meta->getMeta((int) $post['post_id']);
                            if (isset($data['og_title']) && !empty($data['og_title'])) {
                                $meta->setMeta('og_title', sanitize_text_field($data['og_title']));
                            }
                            if (isset($data['og_desc']) && !empty($data['og_desc'])) {
                                $meta->setMeta('og_desc', sanitize_text_field($data['og_desc']));
                            }
                            if (isset($data['image_url']) && !empty($data['image_url'])) {
                                $meta->setMeta('og_image', trim(esc_url_raw($data['image_url'])));
                                $meta->setMeta('og_image_alt', '');
                            }
                            $meta->updateMeta((int) $post['post_id']);
                            global $wpdb;
                            //No User Input
                            // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
                            $res = $wpdb->get_results($wpdb->prepare("SELECT * FROM {$wpdb->prefix}b2s_posts LEFT JOIN {$wpdb->prefix}b2s_posts_sched_details ON {$wpdb->prefix}b2s_posts.sched_details_id = {$wpdb->prefix}b2s_posts_sched_details.id LEFT JOIN {$wpdb->prefix}b2s_posts_network_details ON {$wpdb->prefix}b2s_posts.network_details_id = {$wpdb->prefix}b2s_posts_network_details.id WHERE {$wpdb->prefix}b2s_posts.sched_details_id > 0 AND {$wpdb->prefix}b2s_posts.post_id = %d AND {$wpdb->prefix}b2s_posts_network_details.network_id IN (" . implode(',', json_decode(B2S_PLUGIN_NETWORK_META_TAGS, true)['og']) . ") AND sched_date_utc > %s", $post['post_id'], gmdate('Y-m-d H:i:s')));
                            foreach ($res as $key => $sched) {
                                $schedData = unserialize($sched->sched_data);
                                if ((isset($schedData['post_format']) && (int) $schedData['post_format'] == 0) || (!isset($schedData['post_format']) && isset($schedData['image_url']) && !empty($schedData['image_url']))) {
                                    $schedData['image_url'] = $data['image_url'];
                                    $wpdb->update($wpdb->prefix . 'b2s_posts_sched_details', array(
                                        'sched_data' => serialize($schedData),
                                        'image_url' => $data['image_url']
                                            ), array("id" => $sched->sched_details_id), array('%s', '%s', '%d'));
                                }
                            }
                        }

//Change/Set MetaTags
                        if (((int) $data['network_id'] == 2 || (int) $data['network_id'] == 24 || (int) $data['network_id'] == 45) && $metaCard == false && (int) $post['post_id'] > 0 && isset($data['post_format']) && (int) $data['post_format'] == 0 && isset($post['change_card_meta']) && (int) $post['change_card_meta'] == 1) {  //LinkPost
                            $metaCard = true;
                            $meta = B2S_Meta::getInstance();
                            $meta->getMeta((int) $post['post_id']);
                            if (isset($data['card_title']) && !empty($data['card_title'])) {
                                $meta->setMeta('card_title', sanitize_text_field($data['card_title']));
                            }
                            if (isset($data['card_desc']) && !empty($data['card_desc'])) {
                                $meta->setMeta('card_desc', sanitize_text_field($data['card_desc']));
                            }
                            if (isset($data['image_url']) && !empty($data['image_url'])) {
                                $meta->setMeta('card_image', trim(esc_url_raw($data['image_url'])));
                            }
                            $meta->updateMeta((int) $post['post_id']);
                        }

                        $sendData = array("board" => isset($data['board']) ? sanitize_text_field($data['board']) : '',
                            "group" => isset($data['group']) ? sanitize_text_field($data['group']) : '',
                            "custom_title" => isset($data['custom_title']) ? sanitize_text_field($data['custom_title']) : '',
                            "content" => (isset($data['content']) && !empty($data['content'])) ? strip_tags(preg_replace("/(<[\/]*)em(>)/", "$1i$2", html_entity_decode($data['content'])), '<p><h1><h2><br><i><b><a><img>') : '',
                            'url' => isset($data['url']) ? htmlspecialchars_decode(esc_url_raw($data['url'])) : '',
                            'image_url' => isset($data['image_url']) ? trim(esc_url_raw($data['image_url'])) : '',
                            'tags' => isset($data['tags']) ? $data['tags'] : array(),
                            'network_id' => isset($data['network_id']) ? (int) $data['network_id'] : '',
                            'network_type' => isset($data['network_type']) ? (int) $data['network_type'] : '',
                            'network_tos_group_id' => (isset($data['network_tos_group_id']) && !empty($data['network_tos_group_id'])) ? sanitize_text_field($data['network_tos_group_id']) : '',
                            'network_kind' => isset($data['network_kind']) ? (int) $data['network_kind'] : 0,
                            'marketplace_category' => isset($data['marketplace_category']) ? (int) $data['marketplace_category'] : 0,
                            'marketplace_type' => isset($data['marketplace_type']) ? (int) $data['marketplace_type'] : 0,
                            'network_display_name' => isset($data['network_display_name']) ? sanitize_text_field($data['network_display_name']) : '',
                            'network_auth_id' => (int) $networkAuthId,
                            'post_format' => isset($data['post_format']) ? (int) $data['post_format'] : '',
                            'post_for_approve' => isset($post['post_for_approve']) ? (int) $post['post_for_approve'] : 0,
                            'user_timezone' => isset($post['user_timezone']) ? (int) $post['user_timezone'] : 0,
                            'sched_details_id' => isset($post['sched_details_id']) ? (int) $post['sched_details_id'] : null,
                            'publish_date' => isset($post['publish_date']) ?  wp_date('Y-m-d H:i:s', strtotime($post['publish_date']), new DateTimeZone(date_default_timezone_get())) :  wp_date('Y-m-d H:i:s', current_time('timestamp'), new DateTimeZone(date_default_timezone_get()))
                        );

                        if (isset($data['date'][0]) && isset($data['time'][0])) {
                            $sched_date = B2S_Util::getCustomDateFormat( wp_date('Y-m-d H:i:00', strtotime($data['date'][0] . ' ' . $data['time'][0]), new DateTimeZone(date_default_timezone_get())), substr(B2S_LANGUAGE, 0, 2));
                            $schedData = array(
                                'date' => isset($data['date']) ? $data['date'] : array(),
                                'time' => isset($data['time']) ? $data['time'] : array(),
                                'releaseSelect' => ((isset($post['sched_type']) && (int) $post['sched_type'] > 0) ? (int) $post['sched_type'] : 1),
                                'user_timezone' => isset($post['user_timezone']) ? (int) $post['user_timezone'] : 0,
                                'saveSetting' => isset($data['saveSchedSetting']) ? true : false
                            );

                            //Multi Image
                            if (isset($data['multi_image_1']) && !empty($data['multi_image_1'])) {
                                $schedData['sched_multi_image_1'][0] = $data['multi_image_1'];
                            }
                            if (isset($data['multi_image_2']) && !empty($data['multi_image_2'])) {
                                $schedData['sched_multi_image_2'][0] = $data['multi_image_2'];
                            }
                            if (isset($data['multi_image_3']) && !empty($data['multi_image_3'])) {
                                $schedData['sched_multi_image_3'][0] = $data['multi_image_3'];
                            }
                            if ((int) $data['network_id'] == 12) {
                                if (isset($data['multi_image_4']) && !empty($data['multi_image_4'])) {
                                    $schedData['sched_multi_image_4'][0] = $data['multi_image_4'];
                                }
                                if (isset($data['multi_image_5']) && !empty($data['multi_image_5'])) {
                                    $schedData['sched_multi_image_5'][0] = $data['multi_image_5'];
                                }
                                if (isset($data['multi_image_6']) && !empty($data['multi_image_6'])) {
                                    $schedData['sched_multi_image_6'][0] = $data['multi_image_6'];
                                }
                                if (isset($data['multi_image_7']) && !empty($data['multi_image_7'])) {
                                    $schedData['sched_multi_image_7'][0] = $data['multi_image_7'];
                                }
                                if (isset($data['multi_image_8']) && !empty($data['multi_image_8'])) {
                                    $schedData['sched_multi_image_8'][0] = $data['multi_image_8'];
                                }
                                if (isset($data['multi_image_9']) && !empty($data['multi_image_9'])) {
                                    $schedData['sched_multi_image_9'][0] = $data['multi_image_9'];
                                }
                            }

                            $b2sShipSend->saveSchedDetails(array_merge($defaultPostData, $sendData), $schedData, array());

                            //is post for relay ?
                            //get all relays in primary post id by b2s id & change sched_date + utc
                            if (isset($post['post_for_relay']) && (int) $post['post_for_relay'] == 1 && isset($data['date'][0]) && isset($data['time'][0]) && (int) $b2s_id > 0) {
                                require_once (B2S_PLUGIN_DIR . 'includes/B2S/Post/Tools.php');
                                
                                $res = B2S_Post_Tools::getAllRelayByPrimaryPostId(isset($_POST['b2s_id'])? (int) $_POST['b2s_id']: 0);
                                if (is_array($res) && !empty($res)) {
                                    foreach ($res as $item) {
                                        if (isset($item->id) && (int) $item->id > 0 && isset($item->relay_delay_min) && (int) $item->relay_delay_min > 0) {
                                            $relay_sched_date =  wp_date('Y-m-d H:i:00', strtotime("+" . $item->relay_delay_min . " minutes", strtotime($data['date'][0] . ' ' . $data['time'][0])), new DateTimeZone(date_default_timezone_get()));
                                            $relay_sched_date_utc =  wp_date('Y-m-d H:i:00', strtotime(B2S_Util::getUTCForDate($relay_sched_date, (int) $post['user_timezone'] * (-1))), new DateTimeZone(date_default_timezone_get()));
                                            $wpdb->update($wpdb->prefix . 'b2s_posts', array(
                                                'user_timezone' => (int) $post['user_timezone'],
                                                'publish_date' => "0000-00-00 00:00:00",
                                                'sched_date' => $relay_sched_date,
                                                'sched_date_utc' => $relay_sched_date_utc,
                                                'hook_action' => 2
                                                    ), array("id" => $item->id), array('%s', '%s', '%s', '%s', '%d'));
                                        }
                                    }
                                }
                            }
                        }
                    }

                    delete_option("B2S_PLUGIN_CALENDAR_BLOCKED_" . $b2s_id);
                }
            }
            echo json_encode(array('result' => true, 'date' => $sched_date));
            wp_die();
    }

    public function releaseLocks() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once(B2S_PLUGIN_DIR . 'includes/Options.php');
        $options = new B2S_Options(get_current_user_id());
        $lock = $options->_getOption("B2S_PLUGIN_USER_CALENDAR_BLOCKED");

        if (isset($_POST['post_id']) && (int) $_POST['post_id'] > 0) {
            delete_option('B2S_PLUGIN_POST_META_TAGES_TWITTER_' . (int) $_POST['post_id']);
            delete_option('B2S_PLUGIN_POST_META_TAGES_OG_' . (int) $_POST['post_id']);
        }
        if ($lock) {
            delete_option("B2S_PLUGIN_CALENDAR_BLOCKED_" . $lock);
            $options->_setOption("B2S_PLUGIN_USER_CALENDAR_BLOCKED", false);
        }
      
    }

    public function hideRating() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        $forever = (isset($_POST['forever']) && $_POST['forever'] === true) ? true : false;
        B2S_Rating::hide($forever);
       
    }

    public function hidePremiumMessage() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        update_option("B2S_HIDE_PREMIUM_MESSAGE", true, false);
      
    }

    public function hideTrailMessage() {
      
        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        update_option("B2S_HIDE_TRAIL_MESSAGE", true, false);
       
    }

    public function hideTrailEndedMessage() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        update_option("B2S_HIDE_TRAIL_ENDED", true, false);
       
    }

    public function moveUserAuthToProfile() {


        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['mandantId']) && isset($_POST['networkAuthId']) && (int) $_POST['networkAuthId'] > 0) {
                $data = array('action' => 'moveUserAuthToProfile', 'token' => B2S_PLUGIN_TOKEN, 'networkAuthId' => (int) $_POST['networkAuthId'], 'mandantId' => (int) $_POST['mandantId']);
                $moveUserAuth = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $data, 30));
                if ($moveUserAuth->result == true) {
                    global $wpdb;
                    $networkAuthIdExist = $wpdb->get_row($wpdb->prepare("SELECT * FROM `{$wpdb->prefix}b2s_user_network_settings` WHERE `blog_user_id` = %d AND `network_auth_id` = %d", (int) B2S_PLUGIN_BLOG_USER_ID, (int) $_POST['networkAuthId']));
                    if (!empty($networkAuthIdExist) && isset($networkAuthIdExist->id)) {
                        $wpdb->query($wpdb->prepare("UPDATE `{$wpdb->prefix}b2s_user_network_settings` SET `mandant_id` = %d WHERE `blog_user_id` = %d AND `network_auth_id` = %d;", (int) $_POST['mandantId'], (int) B2S_PLUGIN_BLOG_USER_ID, (int) $_POST['networkAuthId']));
                    }
                    echo json_encode(array('result' => true));
                    wp_die();
                }
        }

        echo json_encode(array('result' => false));
        wp_die();
      
    }

    public function assignNetworkUserAuth() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            if (isset($_POST['networkAuthId']) && (int) $_POST['networkAuthId'] > 0 && isset($_POST['assignBlogUserId']) && (int) $_POST['assignBlogUserId'] > 0) {
                $assignToken = B2S_Tools::getTokenById((int) $_POST['assignBlogUserId']);
                $data = array('action' => 'approveUserAuth', 'token' => B2S_PLUGIN_TOKEN, 'networkAuthId' => (int) $_POST['networkAuthId'], 'assignToken' => $assignToken, 'tokenBlogUserId' => B2S_PLUGIN_BLOG_USER_ID, 'assignTokenBlogUserId' => (int) $_POST['assignBlogUserId']);
                $assignUserAuth = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $data, 30), true);
                if (isset($assignUserAuth['result']) && $assignUserAuth['result'] == true && isset($assignUserAuth['assign_network_auth_id']) && (int) $assignUserAuth['assign_network_auth_id'] > 0) {
                    global $wpdb;
                    $networkAuthIdExist = $wpdb->get_row($wpdb->prepare("SELECT * FROM `{$wpdb->prefix}b2s_posts_network_details` WHERE `network_auth_id` = %d", (int) $assignUserAuth['assign_network_auth_id']));
                    if (empty($networkAuthIdExist) || !isset($networkAuthIdExist->id)) {
                        //Insert
                        $wpdb->query($wpdb->prepare("INSERT INTO `{$wpdb->prefix}b2s_posts_network_details` (`network_id`, `network_type`,`network_auth_id`,`network_display_name`,`owner_blog_user_id`) VALUES (%d,%d,%d,%s,%d);", (int) $assignUserAuth['assign_network_id'], $assignUserAuth['assign_network_type'], (int) $assignUserAuth['assign_network_auth_id'], $assignUserAuth['assign_network_display_name'], B2S_PLUGIN_BLOG_USER_ID));
                    } else {
                        //Update
                        $wpdb->query($wpdb->prepare("UPDATE `{$wpdb->prefix}b2s_posts_network_details` SET `network_id` = %d, `network_type` = %d, `network_auth_id` = %d, `network_display_name` = %s, `owner_blog_user_id` = %d WHERE `network_auth_id` = %d;", (int) $assignUserAuth['assign_network_id'], $assignUserAuth['assign_network_type'], (int) $assignUserAuth['assign_network_auth_id'], $assignUserAuth['assign_network_display_name'], (int) $assignUserAuth['assign_network_auth_id'], B2S_PLUGIN_BLOG_USER_ID));
                    }
                    $wpdb->insert($wpdb->prefix . 'b2s_user_network_settings', array('blog_user_id' => (int) $_POST['assignBlogUserId'], 'mandant_id' => 0, 'network_auth_id' => (int) $assignUserAuth['assign_network_auth_id']), array('%d', '%d', '%d'));

                    $options = new B2S_Options((int) B2S_PLUGIN_BLOG_USER_ID);

                    $optionUserTimeZone = $options->_getOption('user_time_zone');
                    $userTimeZone = ($optionUserTimeZone !== false) ? $optionUserTimeZone : get_option('timezone_string');
                    $userTimeZoneOffset = (empty($userTimeZone)) ? get_option('gmt_offset') : B2S_Util::getOffsetToUtcByTimeZone($userTimeZone);
                    $current_user_date =  wp_date((strtolower(substr(B2S_LANGUAGE, 0, 2)) == 'de') ? 'd.m.Y' : 'Y-m-d', strtotime(B2S_Util::getUTCForDate( wp_date('Y-m-d H:i:s', null, new DateTimeZone(date_default_timezone_get())), $userTimeZoneOffset)), new DateTimeZone(date_default_timezone_get()));

                    if (isset($_POST['optionBestTimes']) && filter_var(wp_unslash($_POST['optionBestTimes']), FILTER_VALIDATE_BOOLEAN) == true) {
                        $userSchedData = $options->_getOption('auth_sched_time');
                        if (isset($userSchedData['delay_day'][(int) $_POST['networkAuthId']]) && isset($userSchedData['time'][(int) $_POST['networkAuthId']])) {
                            $assignUserOptions = new B2S_Options((int) $_POST['assignBlogUserId']);
                            $assignUserSchedData = $assignUserOptions->_getOption('auth_sched_time');
                            if ($assignUserSchedData != false && isset($assignUserSchedData['delay_day']) && isset($assignUserSchedData['time'])) {
                                $assignUserSchedData['delay_day'][$assignUserAuth['assign_network_auth_id']] = $userSchedData['delay_day'][(int) $_POST['networkAuthId']];
                                $assignUserSchedData['time'][$assignUserAuth['assign_network_auth_id']] = $userSchedData['time'][(int) $_POST['networkAuthId']];
                            } else {
                                $assignUserSchedData = array(
                                    'delay_day' => array($assignUserAuth['assign_network_auth_id'] => $userSchedData['delay_day'][(int) $_POST['networkAuthId']]),
                                    'time' => array($assignUserAuth['assign_network_auth_id'] => $userSchedData['time'][(int) $_POST['networkAuthId']])
                                );
                            }
                            $assignUserOptions->_setOption('auth_sched_time', $assignUserSchedData);
                        }
                    } else {
                        $assignUserOptions = new B2S_Options((int) $_POST['assignBlogUserId']);
                        $assignUserSchedData = $assignUserOptions->_getOption('auth_sched_time');
                        $current_user_time = new DateTime( wp_date('H:i', strtotime(B2S_Util::getUTCForDate( wp_date('Y-m-d H:i:s', null, new DateTimeZone(date_default_timezone_get())), $userTimeZoneOffset)), new DateTimeZone(date_default_timezone_get())));
                        if ((int) $current_user_time->format('i') >= 30) {
                            $current_user_time->setTime((int) $current_user_time->format('H') + 1, 0);
                        } else {
                            $current_user_time->setTime((int) $current_user_time->format('H'), 30);
                        }
                        if ($assignUserSchedData != false && isset($assignUserSchedData['delay_day']) && isset($assignUserSchedData['time'])) {
                            $assignUserSchedData['delay_day'][$assignUserAuth['assign_network_auth_id']] = 0;
                            $assignUserSchedData['time'][$assignUserAuth['assign_network_auth_id']] = $current_user_time->format('H:i');
                        } else {
                            $assignUserSchedData = array(
                                'delay_day' => array($assignUserAuth['assign_network_auth_id'] => 0),
                                'time' => array($assignUserAuth['assign_network_auth_id'] => $current_user_time->format('H:i'))
                            );
                        }
                        $assignUserOptions->_setOption('auth_sched_time', $assignUserSchedData);
                    }

                    if (isset($_POST['optionPostingTemplate']) && filter_var(wp_unslash($_POST['optionPostingTemplate']), FILTER_VALIDATE_BOOLEAN) == true) {
                        $userTemplateData = $options->_getOption('post_template');
                        if (isset($userTemplateData[$assignUserAuth['assign_network_id']][$assignUserAuth['assign_network_type']])) {
                            $assignUserOptions = new B2S_Options((int) $_POST['assignBlogUserId']);
                            $assignUserTemplateData = $assignUserOptions->_getOption('post_template');
                            if ($assignUserTemplateData == false || !isset($assignUserTemplateData[$assignUserAuth['assign_network_id']])) {
                                $defaultTemplate = unserialize(B2S_PLUGIN_NETWORK_SETTINGS_TEMPLATE_DEFAULT);
                                if (isset($defaultTemplate[$assignUserAuth['assign_network_id']])) {
                                    $assignUserTemplateData = array($assignUserAuth['assign_network_id'] => $defaultTemplate[$assignUserAuth['assign_network_id']]);
                                } else {
                                    $assignUserTemplateData[$assignUserAuth['assign_network_id']] = $userTemplateData[$assignUserAuth['assign_network_id']];
                                }
                            }
                            $assignUserTemplateData[$assignUserAuth['assign_network_id']][$assignUserAuth['assign_network_type']] = $userTemplateData[$assignUserAuth['assign_network_id']][$assignUserAuth['assign_network_type']];
                            $assignUserOptions->_setOption('post_template', $assignUserTemplateData);
                        }
                    }

                    if (isset($_POST['optionUrlParameter']) && filter_var(wp_unslash($_POST['optionUrlParameter']), FILTER_VALIDATE_BOOLEAN) == true) {
                        $rawOriginalData = $wpdb->get_row($wpdb->prepare("SELECT data FROM `{$wpdb->prefix}b2s_posts_network_details` WHERE `network_auth_id` = %d", (int) $_POST['networkAuthId']));
                        $originalData = unserialize($rawOriginalData->data);
                        if ($originalData != false && $originalData != NULL && is_array($originalData) && isset($originalData) && !empty($originalData) && isset($originalData['url_parameter'])) {
                            $wpdb->query($wpdb->prepare("UPDATE `{$wpdb->prefix}b2s_posts_network_details` SET `data` = %s, `owner_blog_user_id` = %d WHERE `network_auth_id` = %d;", serialize(array('url_parameter' => $originalData['url_parameter'])), B2S_PLUGIN_BLOG_USER_ID, (int) $assignUserAuth['assign_network_auth_id']));
                        }
                    }

                    $displayName = stripslashes(get_user_by('id', (int) $_POST['assignBlogUserId'])->display_name);
                    $newListEntry = '<li class="b2s-network-item-auth-list-li">';
                    $newListEntry .= '<div class="pull-left" style="padding-top: 5px;"><span>' . esc_html(((empty($displayName) || $displayName == false) ? __("Unknown username", "blog2social") : $displayName)) . '</span></div>';
                    $network_auth_id = isset($_POST['networkAuthId']) ? sanitize_text_field(wp_unslash($_POST['networkAuthId'])) : '';
                    $newListEntry .= '<div class="pull-right"><span style="margin-right: 10px;">' . esc_html($current_user_date) . '</span> <button class="b2s-network-item-auth-list-btn-delete btn btn-danger btn-sm" data-network-auth-id="' . esc_attr($network_auth_id) . '" data-assign-network-auth-id="' . esc_attr($assignUserAuth['assign_network_auth_id']) . '" data-network-id="' . esc_attr($assignUserAuth['assign_network_id']) . '" data-network-type="' . esc_attr($assignUserAuth['assign_network_type']) . '" data-blog-user-id="' . esc_attr((int) $_POST['assignBlogUserId']) . '">' . esc_html__('delete', 'blog2social') . '</button></div>';
                    $newListEntry .= '<div class="clearfix"></div></li>';
                    echo json_encode(array('result' => true, 'newListEntry' => $newListEntry));
                    wp_die();
                } else if (isset($assignUserAuth['error_reason'])) {
                    echo json_encode(array('result' => false, 'error_reason' => $assignUserAuth['error_reason']));
                    wp_die();
                } else {
                    echo json_encode(array('result' => false, 'error_reason' => 'invalid_data'));
                    wp_die();
                }
            }

            echo json_encode(array('result' => false, 'error_reason' => 'default'));
            wp_die();
   
    }

    public function savePostTemplate() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['template_data']) && isset($_POST['networkId']) && (int) $_POST['networkId'] > 0) {
                require_once(B2S_PLUGIN_DIR . 'includes/Options.php');
                $options = new B2S_Options(get_current_user_id());

                $post_template_result = false;
                $link_no_cache_option = false;

                if (B2S_PLUGIN_USER_VERSION >= 1) {
                    $post_template = $options->_getOption("post_template");

                    if ($post_template == false) {
                        $post_template = array();
                    }

                    $new_template = array();
                    $default_template = unserialize(B2S_PLUGIN_NETWORK_SETTINGS_TEMPLATE_DEFAULT);
               
                    // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized,  -- Sanitized with B2S_Tools:Array preserve linebreaks with textarea
                    $templateData = wp_unslash(B2S_Tools::sanitize_array_textarea(wp_unslash($_POST['template_data'])));
                
                
                    foreach ($templateData as $type => $data) {
                        if (isset($data['multi_kind']) && (int) $data['multi_kind'] == 1) {
                            $short_text = array();
                            foreach ($data['type_kind'] as $kind_id => $kind_data) {
                                $limit = ((isset($default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['limit'])) ? $default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['limit'] : 0);
                                $range_max = ((int) $limit != 0 && (int) $kind_data['range_max'] > (int) $limit) ? (int) $limit : (int) $kind_data['range_max'];
                                $excerpt_range_max = ((int) $limit != 0 && (int) $kind_data['excerpt_range_max'] > (int) $limit) ? (int) $limit : (int) $kind_data['excerpt_range_max'];
                                $short_text[$kind_id] = array(
                                    'active' => 0,
                                    'range_min' => ((isset($default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['range_max']) && $range_max >= (int) $default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['range_max']) ? (int) $default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['range_min'] : ($range_max / 2)),
                                    'range_max' => $range_max,
                                    'excerpt_range_min' => ((isset($default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['excerpt_range_max']) && $excerpt_range_max >= (int) $default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['excerpt_range_max']) ? (int) $default_template[(int) $_POST['networkId']][$type]['short_text'][$kind_id]['excerpt_range_min'] : ($range_max / 2)),
                                    'excerpt_range_max' => $excerpt_range_max,
                                    'limit' => $limit
                                );
                            }
                            $new_template[$type] = array(
                                'format' => (isset($data['format'])) ? $data['format'] : false,
                                'content' => (isset($data['content'])) ? sanitize_textarea_field($data['content']) : $default_template[(int) $_POST['networkId']][$type]['content'],
                                'short_text' => $short_text
                            );
                        } else {
                            $limit = ((isset($default_template[(int) $_POST['networkId']][$type]['short_text']['limit'])) ? $default_template[(int) $_POST['networkId']][$type]['short_text']['limit'] : 0);
                            $range_max = ((int) $limit != 0 && (int) $data['range_max'] > (int) $limit) ? (int) $limit : (int) $data['range_max'];
                            $excerpt_range_max = ((int) $limit != 0 && (int) $data['excerpt_range_max'] > (int) $limit) ? (int) $limit : (int) $data['excerpt_range_max'];
                            $new_template[$type] = array(
                                'format' => (isset($data['format'])) ? $data['format'] : false,
                                'content' => (isset($data['content'])) ? sanitize_textarea_field($data['content']) : $default_template[(int) $_POST['networkId']][$type]['content'],
                                'short_text' => array(
                                    'active' => 0,
                                    'range_min' => ((isset($default_template[(int) $_POST['networkId']][$type]['short_text']['range_max']) && $range_max >= (int) $default_template[(int) $_POST['networkId']][$type]['short_text']['range_max']) ? (int) $default_template[(int) $_POST['networkId']][$type]['short_text']['range_min'] : ($range_max / 2)),
                                    'range_max' => $range_max,
                                    'excerpt_range_min' => ((isset($default_template[(int) $_POST['networkId']][$type]['short_text']['excerpt_range_max']) && $excerpt_range_max >= (int) $default_template[(int) $_POST['networkId']][$type]['short_text']['excerpt_range_max']) ? (int) $default_template[(int) $_POST['networkId']][$type]['short_text']['excerpt_range_min'] : ($range_max / 2)),
                                    'excerpt_range_max' => $excerpt_range_max,
                                    'limit' => $limit
                                )
                            );
                        }

                        if ((int) $_POST['networkId'] == 2 || (int) $_POST['networkId'] == 45) {
                            $new_template[$type]['twitterThreads'] = ((isset($data['twitterThreads']) && $data['twitterThreads'] == 'false') ? false : true);
                        }
                        if (in_array((int) $_POST['networkId'], unserialize(B2S_PLUGIN_ALLOW_ADD_LINK))) {
                            $new_template[$type]['addLink'] = ((isset($data['addLink']) && $data['addLink'] == 'false') ? false : true);
                        }
                        if ((int) $_POST['networkId'] == 12) {
                            $new_template[$type]['shuffleHashtags'] = ((isset($data['shuffleHashtags']) && $data['shuffleHashtags'] == 'true') ? true : false);
                            $new_template[$type]['frameColor'] = ((isset($data['frameColor']) && !empty($data['frameColor'])) ? $data['frameColor'] : '#ffffff');
                        }
                    }

                    $post_template[(int) $_POST['networkId']] = $new_template;
                    $post_template_result = $options->_setOption("post_template", $post_template);
                }

                if (((int) $_POST['networkId'] == 1 || (int) $_POST['networkId'] == 3 || (int) $_POST['networkId'] == 19) && isset($_POST['link_no_cache'])) {
                    $linkNoCache = B2S_Tools::getNoCacheData(B2S_PLUGIN_BLOG_USER_ID);
                    if (is_array($linkNoCache) && !empty($linkNoCache)) {
                        $linkNoCache[(int) $_POST['networkId']] = (int) $_POST['link_no_cache'];
                        $options->_setOption('link_no_cache', $linkNoCache);
                        $link_no_cache_option = true;
                    }
                }

                if ($post_template_result == true || $link_no_cache_option == true) {
                    echo json_encode(array('result' => true));
                    wp_die();
                } else {
                    echo json_encode(array('result' => false));
                    wp_die();
                }
        }

        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function loadDefaultPostTemplate() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['networkId']) && (int) $_POST['networkId'] > 0 && isset($_POST['networkType']) && isset(unserialize(B2S_PLUGIN_NETWORK_SETTINGS_TEMPLATE_DEFAULT)[(int) $_POST['networkId']])) {
            $default = unserialize(B2S_PLUGIN_NETWORK_SETTINGS_TEMPLATE_DEFAULT)[(int) $_POST['networkId']];
            require_once B2S_PLUGIN_DIR . 'includes/B2S/Network/Item.php';
            $networkItem = new B2S_Network_Item();
            $html = $networkItem->getEditTemplateFormContent((int) $_POST['networkId'], (int) $_POST['networkType'], $default);
            echo json_encode(array('result' => true, 'html' => $html));
            wp_die();
        }
        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function saveDraftData() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['post_id']) && (int) $_POST['post_id'] > 0) {
            global $wpdb;
            if ($wpdb->get_var("SHOW TABLES LIKE '{$wpdb->prefix}b2s_posts_drafts'") == $wpdb->prefix . 'b2s_posts_drafts') {
                $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
                $optionUserTimeZone = $options->_getOption('user_time_zone');
                $userTimeZone = ($optionUserTimeZone !== false) ? $optionUserTimeZone : get_option('timezone_string');
                $userTimeZoneOffset = (empty($userTimeZone)) ? get_option('gmt_offset') : B2S_Util::getOffsetToUtcByTimeZone($userTimeZone);
                $date = B2S_Util::getCustomLocaleDateTime($userTimeZoneOffset);
                $draftEntry = $wpdb->get_var( $wpdb->prepare("SELECT `id` FROM `{$wpdb->prefix}b2s_posts_drafts` WHERE `blog_user_id` = %d AND `post_id` = %d  AND `save_origin` = 0", B2S_PLUGIN_BLOG_USER_ID, (int) $_POST['post_id']));
                if ($draftEntry !== NULL && (int) $draftEntry > 0) {
                    $wpdb->update($wpdb->prefix . 'b2s_posts_drafts', array('data' => serialize($_POST), 'last_save_date' => $date), array('id' => (int) $draftEntry));
                } else {
                    $wpdb->insert($wpdb->prefix . 'b2s_posts_drafts', array('blog_user_id' => B2S_PLUGIN_BLOG_USER_ID, 'post_id' => (int) $_POST['post_id'], 'data' => serialize($_POST), 'last_save_date' => $date));
                }

                echo json_encode(array('result' => true));
                wp_die();
            }
        }

        echo json_encode(array('result' => false));
        wp_die();

    }

    public function deleteDraft() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['draftId']) && (int) $_POST['draftId'] > 0) {
            global $wpdb;
            $wpdb->delete($wpdb->prefix . 'b2s_posts_drafts', array('id' => (int) $_POST['draftId'], 'blog_user_id' => B2S_PLUGIN_BLOG_USER_ID), array('%d', '%d'));
            echo json_encode(array('result' => true));
            wp_die();
        }
        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function changeFavoriteStatus() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['postId']) && (int) $_POST['postId'] > 0 && isset($_POST['setStatus']) && (int) $_POST['setStatus'] >= 0) {
            global $wpdb;
            if ((int) $_POST['setStatus'] == 1) {
                $favoriteEntry = $wpdb->get_var($wpdb->prepare("SELECT `id` FROM `{$wpdb->prefix}b2s_posts_favorites` WHERE `blog_user_id` = %d AND `post_id` = %d", B2S_PLUGIN_BLOG_USER_ID, (int) $_POST['postId']));
                if ($favoriteEntry == NULL) {
                    $wpdb->insert($wpdb->prefix . 'b2s_posts_favorites', array('blog_user_id' => B2S_PLUGIN_BLOG_USER_ID, 'post_id' => (int) $_POST['postId'], 'save_date' => gmdate('Y-m-d H:i:s')));
                }
            } else {
                $wpdb->delete($wpdb->prefix . 'b2s_posts_favorites', array('blog_user_id' => B2S_PLUGIN_BLOG_USER_ID, 'post_id' => (int) $_POST['postId']), array('%d', '%d'));
            }
            echo json_encode(array('result' => true));
            wp_die();
        }
        echo json_encode(array('result' => false));
        wp_die();
     
    }

    public function saveUrlParameter() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            if (isset($_POST['originNetworkAuthId']) && (int) $_POST['originNetworkAuthId'] > 0 && isset($_POST['networkId']) && (int) $_POST['networkId'] > 0 && isset($_POST['networks']) && !empty($_POST['networks']) && isset($_POST['urlParameter'])) {
                $inputParams = json_decode(stripslashes_deep(sanitize_text_field(wp_unslash($_POST['urlParameter']))), true);
                if ($inputParams === false) {
                    echo json_encode(array('result' => false));
                    wp_die();
                }
                $newParams = array();
                foreach ($inputParams as $key => $value) {
                    $key = urlencode(str_replace(" ", "", $key));
                    $value = urlencode($value);
                    $newParams[$key] = $value;
                }
                global $wpdb;
               
                if (is_array($_POST['networks'])) {
                    // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                    $_POST['networks'] = B2S_Tools::sanitize_array(wp_unslash($_POST['networks']));
                    // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                    foreach (wp_unslash($_POST['networks']) as $network) {
                        if (isset($network['networkAuthId']) && (int) $network['networkAuthId'] > 0) {
                            $result = $wpdb->get_results($wpdb->prepare("SELECT `id`, `data` FROM `{$wpdb->prefix}b2s_posts_network_details` WHERE `network_auth_id` = %d", (int) $network['networkAuthId']));
                            if (!empty($result) && isset($result[0])) {
                                if ($result[0]->data !== NULL && !empty($result[0]->data)) {
                                    $data = unserialize($result[0]->data);
                                    if ($data != false && is_array($data)) {
                                        $data['url_parameter'][0]['name'] = 'default';
                                        $data['url_parameter'][0]['querys'] = $newParams;
                                    } else {
                                        $data = array('url_parameter' => array(0 => array('name' => 'default', 'querys' => $newParams)));
                                    }
                                } else {
                                    $data = array('url_parameter' => array(0 => array('name' => 'default', 'querys' => $newParams)));
                                }
                                $wpdb->update($wpdb->prefix . 'b2s_posts_network_details', array('data' => serialize($data)), array('owner_blog_user_id' => B2S_PLUGIN_BLOG_USER_ID), array('network_auth_id' => (int) $network['networkAuthId']));
                            } else {
                                if (isset($network['networkId']) && isset($network['networkType']) && isset($network['networkAuthId']) && isset($network['displayName'])) {
                                    $data = array('url_parameter' => array(0 => array('name' => 'default', 'querys' => $newParams)));
                                    $wpdb->insert($wpdb->prefix . 'b2s_posts_network_details', array(
                                        'network_id' => (int) $network['networkId'],
                                        'network_type' => (int) $network['networkType'],
                                        'network_auth_id' => (int) $network['networkAuthId'],
                                        'network_display_name' => $network['displayName'],
                                        'owner_blog_user_id' => B2S_PLUGIN_BLOG_USER_ID,
                                        'data' => serialize($data)), array('%d', '%d', '%d', '%s', '%d', '%s')
                                    );
                                }
                            }
                        }
                    }
                }

                require_once (B2S_PLUGIN_DIR . 'includes/B2S/Network/Item.php');
                $networkItem = new B2S_Network_Item();
                $newHtml = $networkItem->getUrlParameterSettings((int) $_POST['originNetworkAuthId'], (int) $_POST['networkId']);
                echo json_encode(array('result' => true, 'html' => $newHtml));
                wp_die();
            }
            echo json_encode(array('result' => false));
            wp_die();
  
    }

    public function rePostSubmit() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            if (isset($_POST['b2s-re-post-profil-dropdown']) && (int) $_POST['b2s-re-post-profil-dropdown'] >= 0 && isset($_POST['b2s-re-post-profil-data-' . sanitize_text_field(wp_unslash($_POST['b2s-re-post-profil-dropdown']))]) && !empty($_POST['b2s-re-post-profil-data-' . sanitize_text_field(wp_unslash($_POST['b2s-re-post-profil-dropdown']))])) {
                $networkData = json_decode(base64_decode(sanitize_text_field(wp_unslash($_POST['b2s-re-post-profil-data-' . sanitize_text_field(wp_unslash($_POST['b2s-re-post-profil-dropdown']))]))));
                if ($networkData !== false && is_array($networkData) && !empty($networkData)) {

                    $countSchedPosts = 0;
                    $countSchedNetworkXIntegration = 0;

                    //Select Posts for Queue
                    $limit = 5;
                    $versionLimit = unserialize(B2S_PLUGIN_RE_POST_LIMIT);
                    if (isset($_POST['b2s-re-post-limit']) && (int) $_POST['b2s-re-post-limit'] >= 1) {
                        $limit = ((int) $_POST['b2s-re-post-limit'] > (int) $versionLimit[B2S_PLUGIN_USER_VERSION]) ? (int) $versionLimit[B2S_PLUGIN_USER_VERSION] : (int) $_POST['b2s-re-post-limit'];
                        if (isset($_POST['b2s-re-post-queue-count']) && (int) $_POST['b2s-re-post-queue-count'] >= 1) {
                            if ((int) $_POST['b2s-re-post-queue-count'] + (int) $_POST['b2s-re-post-limit'] > (int) $versionLimit[B2S_PLUGIN_USER_VERSION]) {
                                $limit = (int) $versionLimit[B2S_PLUGIN_USER_VERSION] - (int) $_POST['b2s-re-post-queue-count'];
                            }
                        }
                    }
                    if ($limit <= 0) {
                        echo json_encode(array('result' => false, 'error' => 'limit'));
                        wp_die();
                    }
                    global $wpdb;
                    $where = "";
                    $join = "";
                    
                    if (isset($_POST['b2s-re-post-settings-option']) && (int) $_POST['b2s-re-post-settings-option'] == 1) {
                        //custom settings
                        //posttypes
                         // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Only used in if condition
                        if (isset($_POST['b2s-re-post-type-active']) && (int) $_POST['b2s-re-post-type-active'] == 1 && isset($_POST['b2s-re-post-type-data']) && !empty($_POST['b2s-re-post-type-data']) && is_array($_POST['b2s-re-post-type-data'])) {
                            // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                            $_POST['b2s-re-post-type-data'] = B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-re-post-type-data']));
                            $placeholders = implode(', ', array_fill(0, count($_POST['b2s-re-post-type-data']), '%s'));
                            //No unescaped User input in statement, state only used in if condition
                            // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.Security.ValidatedSanitizedInput.MissingUnslash, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized, WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare
                            $where .= " AND post_type " . ((isset($_POST['b2s-re-post-type-state']) && !empty($_POST['b2s-re-post-type-state']) && (int) $_POST['b2s-re-post-type-state'] == 1) ? 'NOT' : '') . $wpdb->prepare(" IN (" . $placeholders . ") ", ...$_POST['b2s-re-post-type-data']);
                        }
                
                        //author
                        if (isset($_POST['b2s-re-post-author-active']) && (int) $_POST['b2s-re-post-author-active'] == 1 && isset($_POST['b2s-re-post-author-data']) && !empty($_POST['b2s-re-post-author-data']) && is_array($_POST['b2s-re-post-author-data'])) {
                            // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                            $_POST['b2s-re-post-author-data'] = B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-re-post-author-data']));
                            $placeholders = implode(', ', array_fill(0, count($_POST['b2s-re-post-author-data']), '%s'));
                            //No unescaped User input in statement
                            // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.Security.ValidatedSanitizedInput.MissingUnslash, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized, WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare
                            $where = " AND post_author " . ((isset($_POST['b2s-re-post-author-state']) && !empty($_POST['b2s-re-post-author-state']) && (int) $_POST['b2s-re-post-author-state'] == 1) ? 'NOT' : '') . $wpdb->prepare(" IN (" . $placeholders . ") ", ...$_POST['b2s-re-post-author-data']);
                        }

                        //Start/End Date
                        if (isset($_POST['b2s-re-post-date-active']) && (int) $_POST['b2s-re-post-date-active'] == 1 && isset($_POST['b2s-re-post-date-start']) && !empty($_POST['b2s-re-post-date-start']) && isset($_POST['b2s-re-post-date-end']) && !empty($_POST['b2s-re-post-date-end'])) {
                            //Case Startdate higher then Enddate => Switch Dates
                            if (sanitize_text_field(wp_unslash($_POST['b2s-re-post-date-start'])) > sanitize_text_field(wp_unslash($_POST['b2s-re-post-date-end']))) {
                                $start =  wp_date('Y-m-d', strtotime(sanitize_text_field(wp_unslash($_POST['b2s-re-post-date-end']))), new DateTimeZone(date_default_timezone_get()));
                                $end =  wp_date('Y-m-d', strtotime(sanitize_text_field(wp_unslash($_POST['b2s-re-post-date-start']))), new DateTimeZone(date_default_timezone_get()));
                            } else {
                                $start =  wp_date('Y-m-d', strtotime(sanitize_text_field(wp_unslash($_POST['b2s-re-post-date-start']))), new DateTimeZone(date_default_timezone_get()));
                                $end =  wp_date('Y-m-d', strtotime(sanitize_text_field(wp_unslash($_POST['b2s-re-post-date-end']))), new DateTimeZone(date_default_timezone_get()));
                            }

                            $comparison=  (isset($_POST['b2s-re-post-date-state']) && !empty($_POST['b2s-re-post-date-state']) && (int) $_POST['b2s-re-post-date-state'] == 1) ? '<' : '>=';
                            $startDateComplete= $start. " 00:00:00 ";
                            // comparison is safe
                            // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared 
                            $where .= $wpdb->prepare(" AND (post_date $comparison %s ", $startDateComplete);
                    
                            $comparison2= (isset($_POST['b2s-re-post-date-state']) && !empty($_POST['b2s-re-post-date-state']) && (int) $_POST['b2s-re-post-date-state'] == 1) ? '>' : '<=';
                            $endDateComplete= $end. " 23:59:59 ";
                            $where .= ((isset($_POST['b2s-re-post-date-state']) && !empty($_POST['b2s-re-post-date-state']) && (int) $_POST['b2s-re-post-date-state'] == 1) ? ' OR ' : ' AND ');
                            // comparison is safe
                            // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
                            $where .= $wpdb->prepare(" post_date $comparison2 %s ) ", $endDateComplete);

                        }
                        //only posted x times - Posts (1 post to 1 auth) within 5 minutes counts as posted one time
                        if (isset($_POST['b2s-re-post-already-planed-active']) && (int) $_POST['b2s-re-post-already-planed-active'] == 1 && isset($_POST['b2s-re-post-already-planed-count']) && (int) $_POST['b2s-re-post-already-planed-count'] >= 0) {
                            $where .= " AND posts.ID NOT IN (SELECT post_id FROM (SELECT post_id FROM {$wpdb->prefix}b2s_posts WHERE blog_user_id = " . (int) B2S_PLUGIN_BLOG_USER_ID . " AND publish_date != '0000-00-00 00:00:00' AND publish_error_code = '' AND hide = 0 GROUP BY UNIX_TIMESTAMP(publish_date) DIV 300 ORDER BY `{$wpdb->prefix}b2s_posts`.`post_id` ASC) AS b2s_post_results GROUP BY post_id HAVING count(*) > ". $wpdb->prepare("%d", (int) $_POST['b2s-re-post-already-planed-count']) . ") ";
                        }
                        //categories
                        if (isset($_POST['b2s-re-post-categories-active']) && (int) $_POST['b2s-re-post-categories-active'] == 1 && isset($_POST['b2s-re-post-categories-data']) && !empty($_POST['b2s-re-post-categories-data']) && is_array($_POST['b2s-re-post-categories-data'])) {
                            // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                            $_POST['b2s-re-post-categories-data'] = B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-re-post-categories-data']));

                            $placeholders = implode(', ', array_fill(0, count($_POST['b2s-re-post-categories-data']), '%s'));
                            //No unescaped User input in statement
                            // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.Security.ValidatedSanitizedInput.MissingUnslash, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized, WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare
                            $join.= $wpdb->prepare(" LEFT JOIN (SELECT * FROM $wpdb->term_relationships WHERE term_taxonomy_id IN ('" . $placeholders . "')) AS tr ON tr.object_id = posts.ID", ...$_POST['b2s-re-post-categories-data']);
                            $where .= " AND term_taxonomy_id IS " . ((isset($_POST['b2s-re-post-categories-state']) && !empty($_POST['b2s-re-post-categories-state']) && (int) $_POST['b2s-re-post-categories-state'] == 1) ? '' : 'NOT') . " NULL ";
                        }

                        //tags
                        if (isset($_POST['b2s-re-post-tags-active']) && (int) $_POST['b2s-re-post-tags-active'] == 1 && isset($_POST['b2s-re-post-tags-data']) && !empty($_POST['b2s-re-post-tags-data']) && is_array($_POST['b2s-re-post-tags-data'])) {
                            // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Sanitized with B2S_Tools:Array
                            $_POST['b2s-re-post-tags-data'] = B2S_Tools::sanitize_array(wp_unslash($_POST['b2s-re-post-tags-data']));
                            $placeholders = implode(', ', array_fill(0, count($_POST['b2s-re-post-tags-data'] ), '%s'));
                            //No unescaped User input in statement, -- Sanitized with B2S_Tools:Array
                            // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.Security.ValidatedSanitizedInput.MissingUnslash, WordPress.Security.ValidatedSanitizedInput.InputNotSanitized, WordPress.DB.PreparedSQLPlaceholders.UnfinishedPrepare 
                            $join .= $wpdb->prepare(" LEFT JOIN (SELECT * FROM $wpdb->term_relationships WHERE term_taxonomy_id IN ('" . $placeholders ."')) AS tr ON tr.object_id = posts.ID ", ...$_POST['b2s-re-post-tags-data']);
                            $where .= " AND term_taxonomy_id IS " . ((isset($_POST['b2s-re-post-tags-state']) && !empty($_POST['b2s-re-post-tags-state']) && (int) $_POST['b2s-re-post-tags-state'] == 1) ? '' : 'NOT') . " NULL ";
                        }
                        //include only favorites
                        if (isset($_POST['b2s-re-post-favorites-active']) && (int) $_POST['b2s-re-post-favorites-active'] == 1) {
                            $join .= " LEFT JOIN (SELECT post_id FROM {$wpdb->prefix}b2s_posts_favorites WHERE blog_user_id = '" . B2S_PLUGIN_BLOG_USER_ID . "')AS favorites ON favorites.post_id = posts.ID ";
                            $where .= " AND favorites.post_id IS NOT NULL ";
                        }
                    }

                    $allowedPostTypes = get_post_types(array('public' => true));
                    $postTypeIn = "(";
                    foreach ($allowedPostTypes as $k => $v) {
                        $postTypeIn .= "'" . $v . "',";
                    }
                    $postTypeIn = substr($postTypeIn, 0, -1) . ")";
                    $limit = intval($limit);
                  
                    $sql = "SELECT ID FROM $wpdb->posts as posts " . $join . " WHERE post_status = 'publish' AND post_type IN " . $postTypeIn . " " . $where;
                    $sql .= " ORDER BY post_date ASC ";
                    $sql .= " LIMIT " . $limit;

                    //No unescaped User input in statement
                    // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
                    $result = $wpdb->get_results($sql);
                    if (!is_array($result) || empty($result)) {
                        echo json_encode(array('result' => false, 'error' => 'no_content'));
                        wp_die();
                    } else {
                        //check if posts already in queue
                        $hook_filter = new B2S_Hook_Filter();

                        $postIds = array();
                        for ($i = 0; $i < count($result); $i++) {
                            array_push($postIds, (int) $result[$i]->ID);
                        }

                        $networkIds = array();
                        foreach ($networkData as $network) {
                            array_push($networkIds, (int) $network->networkAuthId);
                        }

                        $where = "WHERE sched_type = '5' AND hide = '0' AND publish_date = '0000-00-00 00:00:00' AND blog_user_id = " . B2S_PLUGIN_BLOG_USER_ID . " AND post_id IN (" . implode(",", $postIds) . ")";
                        $sql = "SELECT {$wpdb->prefix}b2s_posts.post_id AS post_id, {$wpdb->prefix}b2s_posts_network_details.network_auth_id AS network_auth_id FROM {$wpdb->prefix}b2s_posts LEFT JOIN {$wpdb->prefix}b2s_posts_network_details ON {$wpdb->prefix}b2s_posts.network_details_id={$wpdb->prefix}b2s_posts_network_details.id " . $where;
                        //No User Input
                        // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
                        $result = $wpdb->get_results($sql);

                        if (is_array($result) && !empty($result)) {
                            foreach ($result as $k => $v) {
                                $key = array_search($v->post_id, $postIds);
                                $networkKey = array_search($v->network_auth_id, $networkIds);

                                if ($key !== false && $networkKey !== false) {
                                    unset($postIds[$key]);
                                }
                            }
                        }

                        if (empty($postIds)) {
                            echo json_encode(array('result' => false, 'error' => 'content_in_queue'));
                            wp_die();
                        } else {
                            //Time Settings
                            if (isset($_POST['b2s-re-post-share-option'])) {
                                $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
                                $bestTimes = array();
                                if (isset($_POST['b2s-re-post-best-times-active']) && (int) $_POST['b2s-re-post-best-times-active'] > 0) {
                                    $bestTimes = $options->_getOption('auth_sched_time');
                                }
                                $optionUserTimeZone = $options->_getOption('user_time_zone');
                                $userTimeZone = ($optionUserTimeZone !== false) ? $optionUserTimeZone : get_option('timezone_string');
                                $userTimeZoneOffset = (empty($userTimeZone)) ? get_option('gmt_offset') : B2S_Util::getOffsetToUtcByTimeZone($userTimeZone);
                                $userLang = (isset($_POST['b2s-user-lang']) && sanitize_text_field(wp_unslash($_POST['b2s-user-lang'])) != 'en') ? sanitize_text_field(wp_unslash($_POST['b2s-user-lang'])) : 'en';
                                $selectedTwitterProfile = (isset($_POST['b2s-re-post-profil-dropdown-twitter']) && !empty($_POST['b2s-re-post-profil-dropdown-twitter'])) ? (int) $_POST['b2s-re-post-profil-dropdown-twitter'] : '';
                                require_once(B2S_PLUGIN_DIR . 'includes/B2S/RePost/Save.php');

                                if ((int) $_POST['b2s-re-post-share-option'] < 1) {
                                    //share every x days at [Mo][Thu]...
                                    $shareOptionType = 0;
                                    $interval = (isset($_POST['b2s-re-post-day-0']) && (int) $_POST['b2s-re-post-day-0'] > 0 && (int) $_POST['b2s-re-post-day-0'] <= 30) ? (int) $_POST['b2s-re-post-day-0'] : (((int) $_POST['b2s-re-post-day-0'] > 30) ? 30 : 1);
                                    $weekday = array(
                                        0 => ((isset($_POST['b2s-re-post-weekday-0']) && (int) $_POST['b2s-re-post-weekday-0'] >= 1) ? true : false), //Sun
                                        1 => ((isset($_POST['b2s-re-post-weekday-1']) && (int) $_POST['b2s-re-post-weekday-1'] >= 1) ? true : false), //Mon
                                        2 => ((isset($_POST['b2s-re-post-weekday-2']) && (int) $_POST['b2s-re-post-weekday-2'] >= 1) ? true : false), //Tue
                                        3 => ((isset($_POST['b2s-re-post-weekday-3']) && (int) $_POST['b2s-re-post-weekday-3'] >= 1) ? true : false), //Wed
                                        4 => ((isset($_POST['b2s-re-post-weekday-4']) && (int) $_POST['b2s-re-post-weekday-4'] >= 1) ? true : false), //Thu
                                        5 => ((isset($_POST['b2s-re-post-weekday-5']) && (int) $_POST['b2s-re-post-weekday-5'] >= 1) ? true : false), //Fri
                                        6 => ((isset($_POST['b2s-re-post-weekday-6']) && (int) $_POST['b2s-re-post-weekday-6'] >= 1) ? true : false) //Sat
                                    );
                                    $timeInput = (isset($_POST['b2s-re-post-input-time-0']) && !empty($_POST['b2s-re-post-input-time-0'])) ? sanitize_text_field(wp_unslash($_POST['b2s-re-post-input-time-0'])) : '';
                                } else {
                                    //share every x [Monday]
                                    $shareOptionType = 1;
                                    $interval = (isset($_POST['b2s-re-post-day-1']) && (int) $_POST['b2s-re-post-day-1'] > 0 && (int) $_POST['b2s-re-post-day-1'] <= 10) ? (int) $_POST['b2s-re-post-day-1'] : (((int) $_POST['b2s-re-post-day-1'] > 10) ? 10 : 1);
                                    $weekday = (isset($_POST['b2s-re-post-weekday-select']) && !empty($_POST['b2s-re-post-weekday-select'])) ? sanitize_text_field(wp_unslash($_POST['b2s-re-post-weekday-select'])) : 'monday';
                                    $timeInput = (isset($_POST['b2s-re-post-input-time-1']) && !empty($_POST['b2s-re-post-input-time-1'])) ? sanitize_text_field(wp_unslash($_POST['b2s-re-post-input-time-1'])) : '';
                                }

                                $date = new DateTime();
                                $optionPostFormat = $options->_getOption('post_template');
                                $rePost = new B2S_RePost_Save(B2S_PLUGIN_BLOG_USER_ID, $userLang, $userTimeZoneOffset, $optionPostFormat, true, $bestTimes);
                                foreach ($postIds as $k => $postId) {
                                    //get Postdata
                                    $postData = get_post((int) $postId);
                                    $title = isset($postData->post_title) ? B2S_Util::getTitleByLanguage(wp_strip_all_tags($postData->post_title), strtolower($userLang)) : '';
                                    $content = (isset($postData->post_content) && !empty($postData->post_content)) ? trim($postData->post_content) : '';
                                    $excerpt = (isset($postData->post_excerpt) && !empty($postData->post_excerpt)) ? trim($postData->post_excerpt) : '';
                                    $url = get_permalink((int) $postId);
                                    $postImages = $hook_filter->get_wp_post_image($postId, true, $content);
                                    $imageUrl = '';
                                    if ($postImages != false && !empty($postImages)) {
                                        foreach ($postImages as $key => $value) {
                                            if (isset($value[0]) && !empty($value[0])) {
                                                $imageUrl = $value[0];
                                                break;
                                            }
                                        }
                                    }
                                    if (empty($imageUrl) && isset($_POST['b2s-re-post-images-active']) && (int) $_POST['b2s-re-post-images-active'] == 1) {
                                        continue;
                                    }
                                    $keywords = $hook_filter->get_wp_post_hashtag((int) $postId, get_post_type((int) $postId));
                                    $rePost->setPostData($postId, $title, $content, $excerpt, $url, $imageUrl, $keywords);

                                    //calculate Post Start Date
                                    if ($shareOptionType == 0) {
                                        $date->modify('+' . $interval . ' days');
                                    } else {
                                        for ($daycount = 0; $daycount < $interval; $daycount++) {
                                            $date->modify('next ' . $weekday);
                                        }
                                    }
                                    $startDate = $date->format("Y-m-d");
                                    if ($shareOptionType == 0) {
                                        $settings = array('type' => 0, 'bestTimes' => ((!empty($bestTimes)) ? true : false), 'interval' => $interval, 'weekday' => $weekday, 'time' => $timeInput);
                                    } else {
                                        $settings = array('type' => 1, 'bestTimes' => ((!empty($bestTimes)) ? true : false), 'interval' => $interval, 'weekday' => $weekday, 'time' => $timeInput);
                                    }
                                    $nextPosibleDate = $rePost->getPostDateTime($startDate, $settings);
                                    $date->setDate(substr($nextPosibleDate, 0, 4), substr($nextPosibleDate, 5, 2), substr($nextPosibleDate, 8, 2));
                                    $count = $rePost->generatePosts($startDate, $settings, $networkData, $selectedTwitterProfile);
                                    $countSchedPosts = $countSchedPosts + $count;

                                    if (!empty($selectedTwitterProfile)) {
                                        $countSchedNetworkXIntegration++;
                                    }
                                }
                                if ($countSchedPosts == 0) {
                                    echo json_encode(array('result' => false, 'error' => 'no_content'));
                                    wp_die();
                                }
                                B2S_Heartbeat::getInstance()->postToServer();
                            }
                        }
                    }

                    //Licence Condition
                    $currentOpenSchedLimit = 0;
                    $currentNetwork45OpenSchedLimit = 0;
                    if (B2S_PLUGIN_USER_VERSION > 0 && $countSchedPosts > 0) {
                        $versionDetails = get_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID);
                        if ($versionDetails !== false && is_array($versionDetails) && !empty($versionDetails)) {
                            if (isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']) && isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'])) {
                                if ((int) $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] > 0) {
                                    $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) - $countSchedPosts;
                                    update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $versionDetails, false);
                                    $currentOpenSchedLimit = $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'];
                                }
                            }
                            if (isset($versionDetails['B2S_PLUGIN_NETWORK_CONDITION']) && isset($versionDetails['B2S_PLUGIN_NETWORK_CONDITION'][45]) && !empty($versionDetails['B2S_PLUGIN_NETWORK_CONDITION'][45])) {
                                $versionDetails['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota = ($versionDetails['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota) - (int) $countSchedNetworkXIntegration;
                                $currentNetwork45OpenSchedLimit = (int) $versionDetails['B2S_PLUGIN_NETWORK_CONDITION'][45]->open_sched_post_quota;
                                update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $versionDetails, false);
                            }
                        }
                    }

                    require_once(B2S_PLUGIN_DIR . 'includes/B2S/RePost/Item.php');
                    $rePostItem = new B2S_RePost_Item();
                    $queue = $rePostItem->getRePostQueueHtml();
                    echo json_encode(array('result' => true, 'currentNetwork45OpenSchedLimit' => $currentNetwork45OpenSchedLimit, 'currentOpenSchedLimit' => $currentOpenSchedLimit, 'queue' => $queue));
                    wp_die();
                }
            }
     
    }

    public function deleteRePostSched() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['postId']) && !empty($_POST['postId'])) {
            $postIds = explode(',', sanitize_text_field(wp_unslash($_POST['postId'])));
            if (is_array($postIds) && !empty($postIds)) {
                $postIdsString = '';
                foreach ($postIds as $postId) {
                    $postIdsString .= (int) $postId . ',';
                }
                $postIdsString = substr($postIdsString, 0, -1);
                global $wpdb;
                // phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared
                $result = $wpdb->get_results( $wpdb->prepare("SELECT id FROM {$wpdb->prefix}b2s_posts WHERE sched_type = %d AND hide = %d AND publish_date = %s AND blog_user_id = %d AND post_id IN ($postIdsString)", 5, 0, '0000-00-00 00:00:00', B2S_PLUGIN_BLOG_USER_ID));
                if (is_array($result) && !empty($result)) {
                    $b2sPostIds = array();
                    foreach ($result as $k => $v) {
                        array_push($b2sPostIds, $v->id);
                    }
                    require_once (B2S_PLUGIN_DIR . '/includes/B2S/Post/Tools.php');
                    $delete = B2S_Post_Tools::deleteUserSchedPost($b2sPostIds);
                    if ($delete['result'] == true) {

                        //Licence Condition
                        $currentOpenSchedLimit = 0;
                        if ((int) $delete['postCount'] > 0) {
                            $versionDetails = get_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID);
                            if ($versionDetails !== false && is_array($versionDetails) && !empty($versionDetails)) {
                                if (isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']) && isset($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'])) {
                                    if ((int) $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] > 0) {
                                        $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'] = ($versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota']) + $delete['postCount'];
                                        update_option('B2S_PLUGIN_USER_VERSION_' . B2S_PLUGIN_BLOG_USER_ID, $versionDetails, false);
                                        $currentOpenSchedLimit = $versionDetails['B2S_PLUGIN_LICENCE_CONDITION']['open_sched_post_quota'];
                                    }
                                }
                            }
                        }
                        echo json_encode(array('result' => true, 'currentOpenSchedLimit' => $currentOpenSchedLimit, 'postIds' => $postIds));
                        wp_die();
                    }
                }
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
     
    }

    public function communityRegister() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email']) && !empty($_POST['email'])) {
                $username = '';
                $password = '';
                $encrypted = false;
                $publicKey = B2S_PLUGIN_DIR . '/includes/B2S/Support/community_public_key.pem';
                if (function_exists('openssl_public_encrypt') && file_exists($publicKey)) {
                    $getPublicKey = file_get_contents($publicKey);
                    openssl_public_encrypt(sanitize_text_field(wp_unslash($_POST['username'])), $username, $getPublicKey);
                    openssl_public_encrypt(sanitize_text_field(wp_unslash($_POST['password'])), $password, $getPublicKey);
                    $encrypted = true;
                    $username = base64_encode($username);
                    $password = base64_encode($password);
                }
                $postData = array('action' => 'registerCommunity', 'token' => B2S_PLUGIN_TOKEN, 'username' => $username, 'email' => sanitize_email(wp_unslash($_POST['email'])), 'password' => $password, 'encrypted' => $encrypted);
                $repsonse = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $postData, 15), true);
                if (is_array($repsonse) && !empty($repsonse) && isset($repsonse['result'])) {
                    if ($repsonse['result'] == true) {
                        $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
                        $options->_setOption('registered_community', true);
                    }
                    echo json_encode($repsonse);
                    wp_die();
                }
        }
        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function metricsStartingConfirm() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Options.php');
        $option = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $option->_setOption('metrics_started', true);
        echo json_encode(array('result' => true));
        wp_die();
      
    }

    public function metricsBannerClose() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Options.php');
        $option = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $option->_setOption('metrics_banner', true);
        echo json_encode(array('result' => true));
        wp_die();
       
    }

    public function metricsFeedbackClose() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Options.php');
        $option = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $option->_setOption('metrics_feedback', true);
        echo json_encode(array('result' => true));
        wp_die();
    
    }

    public function continueTrialOption() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Options.php');
        $option = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $option->_setOption('hide_7_day_trail', true);
        echo json_encode(array('result' => true));
        wp_die();
    
    }

    public function hideFinalTrialOption() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/Options.php');
        $option = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID);
        $option->_setOption('hide_final_trail', true);
        echo json_encode(array('result' => true));
        wp_die();
      
    }

    public function deleteAllPostsOlderThan() {

        if (!current_user_can('administrator') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        $timeSetoff = null;
        if (isset($_POST["timeframe"])) {
            switch ($_POST["timeframe"]) {
                case 0: $timeSetoff = "-1 month";
                    break;
                case 1: $timeSetoff = "-3 months";
                    break;
                case 2: $timeSetoff = "-6 months";
                    break;
                case 3: $timeSetoff = "-12 months";
                    break;
                case 4: $timeSetoff = "+1 day";
                    break;
                default: $timeSetoff = null;
                    break;
            }

            if (isset($timeSetoff)) {
                $cutoffDate = gmdate("Y-m-d H:i:s", strtotime($timeSetoff));
                global $wpdb;
                $deleteByDateTime = $cutoffDate; //delete rows until this date time (Format: Y-m-d H:i:s)
                $postData = $wpdb->get_results($wpdb->prepare("SELECT id,sched_details_id FROM {$wpdb->prefix}b2s_posts WHERE sched_date ='0000-00-00 00:00:00' AND sched_date_utc ='0000-00-00 00:00:00' AND publish_date < %s AND hook_action = %d LIMIT 500", $deleteByDateTime, 0), ARRAY_A);

                if (!empty($postData) && is_array($postData)) {
                    $count = 0;
                    foreach ($postData as $k => $value) {
                        if (isset($value['id']) && (int) $value['id'] > 0) {
                            $wpdb->get_results($wpdb->prepare("UPDATE {$wpdb->prefix}b2s_posts SET hide = 2, hook_action = 4 WHERE id = %d", (int) $value['id']));
                            $count++;
                        }
                    }
                    echo json_encode(array("result" => true, "count" => $count));
                    wp_die();
                } else {

                    echo json_encode(array("result" => true, "count" => 0));
                    wp_die();
                }
            }
        }
        echo json_encode(array("result" => false, "count" => 0));
        wp_die();
    
    }

    public function addUserApp() {
      
        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        $supportedNetworks = unserialize(B2S_PLUGIN_USER_APP_NETWORKS);

        if (isset($_POST['app_name']) && !empty($_POST['app_name']) && isset($_POST['network_id']) && !empty($_POST['network_id']) && isset($_POST['app_key']) && !empty($_POST['app_key']) && isset($_POST['app_secret']) && !empty($_POST['app_secret'])) {

            $appName = sanitize_text_field(wp_unslash($_POST['app_name']));
            $appNetwork = (int) $_POST['network_id'];
            if (in_array($appNetwork, $supportedNetworks)) {
                //call API app/add endpoint here
                $postData = array('action' => 'addUserApp', 'token' => B2S_PLUGIN_TOKEN,
                    "app_name" => $appName,
                    "network_id" => $appNetwork,
                    "app_key" => sanitize_text_field(wp_unslash($_POST['app_key'])),
                    "app_secret" => sanitize_text_field(wp_unslash($_POST['app_secret'])),
                    "plugin_version" => B2S_PLUGIN_VERSION
                );

                $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $postData));
                if (isset($result->result) && $result->result !== false && isset($result->app_id) && (int) $result->app_id > 0) {
                    $editAppText = esc_html__('Edit app data', 'blog2social');
                    $deleteAppText = esc_html__('Delete app data', 'blog2social');
                    echo json_encode(array("result" => true, "app_id" => $result->app_id, 'app_name' => $appName, 'network_id' => (int) $_POST['network_id'],
                        'deleteAppText' => $deleteAppText, 'editAppText' => $editAppText));
                    wp_die();
                } else {
                    if (isset($result->error_code) && $result->error_code == "APP_PAID") {
                        echo json_encode(array("result" => false, "error_code" => $result->error_code));
                        wp_die();
                    }
                }
            }
        }

        echo json_encode(array("result" => false, "app_id" => -1));
        wp_die();

    }
    

    public function editUserApp() {
        
        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['app_id']) && (int) $_POST['app_id'] > 0) {
            $postData = array('action' => 'editUserApp', 'token' => B2S_PLUGIN_TOKEN,
                "app_id" => (int) $_POST['app_id'],
                'app_name' => isset($_POST['app_name']) ? sanitize_text_field(wp_unslash($_POST['app_name'])) : '',
                'app_key' => isset($_POST['app_key']) ? sanitize_text_field(wp_unslash($_POST['app_key'])) : '',
                'app_secret' => isset($_POST['app_secret']) ? sanitize_text_field(wp_unslash($_POST['app_secret'])) : '',
                "plugin_version" => B2S_PLUGIN_VERSION
            );

            $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $postData));

            if ($result->result !== false) {
                $app_name = isset($_POST['app_name']) ? sanitize_text_field(wp_unslash($_POST['app_name'])) : '';
                echo json_encode(array("result" => true, 'app_id' => (int) $_POST['app_id'], 'app_name' => $app_name));
                wp_die();
            }
        }

        echo json_encode(array("result" => false));
        wp_die();
        
    }

    public function deleteUserApp() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['app_id']) && (int) $_POST['app_id'] > 0) {
            $postData = array('action' => 'deleteUserApp', 'token' => B2S_PLUGIN_TOKEN,
                "app_id" => (int) $_POST['app_id'],
                "plugin_version" => B2S_PLUGIN_VERSION
            );

            $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $postData));
            if (isset($result->result) && $result->result !== false && $result->result != 0) {

                if (isset($result->inactive_auth_ids) && is_array($result->inactive_auth_ids) && sizeof($result->inactive_auth_ids) > 0) {
                    $this->deleteAppAuthsAndSchedPosts($result->inactive_auth_ids);
                }
                echo json_encode(array("result" => true));
                wp_die();
            }
        }

        echo json_encode(array("result" => false));
        wp_die();
    
    }

    private function deleteAppAuthsAndSchedPosts($network_auth_ids = array()) {
        if (is_array($network_auth_ids) && !empty($network_auth_ids) && sizeof($network_auth_ids) > 0) {
            require_once (B2S_PLUGIN_DIR . 'includes/B2S/Post/Tools.php');
            global $wpdb;
            foreach ($network_auth_ids as $auth_id) {
                $res = $wpdb->get_results($wpdb->prepare("SELECT b.id, b.post_id, b.post_for_approve, b.post_for_relay FROM {$wpdb->prefix}b2s_posts b LEFT JOIN {$wpdb->prefix}b2s_posts_network_details d ON (d.id = b.network_details_id) WHERE d.network_auth_id= %d AND b.hide = %d AND b.publish_date =%s", $auth_id, 0, '0000-00-00 00:00:00'));
                if (is_array($res) && !empty($res)) {
                    foreach ($res as $k => $row) {
                        if (isset($row->id) && (int) $row->id > 0) {
                            $hookAction = (isset($row->post_for_approve) && (int) $row->post_for_approve == 0) ? 3 : 0;   //since 4.9.1 Facebook Instant Sharing
                            $wpdb->update($wpdb->prefix . 'b2s_posts', array('hook_action' => $hookAction, 'hide' => 1), array('id' => (int) $row->id));
                            //is post for relay
                            if ((int) $row->post_for_relay == 1) {
                                $relay = B2S_Post_Tools::getAllRelayByPrimaryPostId($row->id);
                                if (is_array($relay) && !empty($relay)) {
                                    $relay = B2S_Tools::sanitize_array($relay);
                                    foreach ($relay as $item) {
                                        if (isset($item->id) && (int) $item->id > 0) {
                                            $wpdb->update($wpdb->prefix . 'b2s_posts', array('hook_action' => 3, 'hide' => 1), array('id' => $item->id));
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public function saveUserOnboarding() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (isset($_POST['onboarding']) && ((int) $_POST['onboarding'] == 0 || (int) $_POST['onboarding'] == 1 || (int) $_POST['onboarding'] == 2)) {
            $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID, "B2S_PLUGIN_ONBOARDING");
            $options->_setOption('onboarding_active', (int) $_POST['onboarding']);
            echo json_encode(array("result" => true));
            wp_die();
        }
        
        echo json_encode(array("result" => false));
        wp_die();
        
    }

    public function saveUserOnboardingPaused() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }
        
        if (isset($_POST['onboarding_paused']) && ((int) $_POST['onboarding_paused'] == 0 || (int) $_POST['onboarding_paused'] == 1)) {
            $options = new B2S_Options(B2S_PLUGIN_BLOG_USER_ID, "B2S_PLUGIN_ONBOARDING");
            $options->_setOption('onboarding_paused', (int) $_POST['onboarding_paused']);
            echo json_encode(array("result" => true));
            wp_die();
        }

        echo json_encode(array("result" => false));
        wp_die();
    
    }

    public function assAuthSave() {

            if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
                echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
                wp_die();
            }

            global $wpdb;
            $accessToken = isset($_POST['ass_access_token'])? sanitize_text_field(wp_unslash($_POST['ass_access_token'])) : '';
            // implement check on entry exists
            $entry = $wpdb->get_var($wpdb->prepare("SELECT `id` FROM `{$wpdb->prefix}b2s_user_tool` WHERE `blog_user_id` = %d AND `tool_id` = 1", (int) B2S_PLUGIN_BLOG_USER_ID));
            if (isset($entry) && (int) $entry > 0) {
                $wpdb->update($wpdb->prefix . 'b2s_user_tool', array('access_token' => $accessToken), array('blog_user_id' => (int) B2S_PLUGIN_BLOG_USER_ID));
            } else {
                $wpdb->insert($wpdb->prefix . 'b2s_user_tool', array('create_date' =>  wp_date('Y-m-d H:i:s', null, new DateTimeZone(date_default_timezone_get())), 'blog_user_id' => (int) B2S_PLUGIN_BLOG_USER_ID, 'tool_id' => 1, 'access_token' => $accessToken));
            }

            $options = new B2S_Options((int) B2S_PLUGIN_BLOG_USER_ID, 'B2S_PLUGIN_USER_TOOL');
            $toolData = array(
                'account' => array(
                    'words_open' => isset($_POST['ass_words_open'])? (int) $_POST['ass_words_open'] :0,
                    'words_total' => isset($_POST['ass_words_total'])? (int) $_POST['ass_words_total'] :0,
                ),
                'settings' => array(
                    'post_template' => true,
                    'deactivate_emojis' => false,
                    'generate_hashtags' => false
                ),
            );
            $options->_setOption(1, $toolData);
            echo json_encode(array('result' => true));
            wp_die();
       
    }

    public function assGenerateContent() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        global $wpdb;
        
        if ($wpdb->get_var($wpdb->prepare("SELECT `id`, `access_token` FROM `{$wpdb->prefix}b2s_user_tool` WHERE `blog_user_id` = %d AND `tool_id` = 1", (int) B2S_PLUGIN_BLOG_USER_ID))) {
            $sqlResult = $wpdb->get_row($wpdb->prepare("SELECT `id`, `access_token` FROM `{$wpdb->prefix}b2s_user_tool` WHERE `blog_user_id` = %d AND `tool_id` = 1", (int) B2S_PLUGIN_BLOG_USER_ID));

            if (isset($sqlResult->id) && (int) $sqlResult->id > 0 && isset($sqlResult->access_token) && !empty($sqlResult->access_token) && isset($_POST['post_id']) && (int) $_POST['post_id'] > 0) {

                $postData = get_post((int) $_POST['post_id']);
                $postContent = '';
                if (isset($postData->post_content) && !empty($postData->post_content)) {
                    $postContent = $postData->post_content;
                } else if (isset($_POST['input_text']) && !empty($_POST['input_text'])) {
                    $postContent = sanitize_textarea_field(wp_unslash($_POST['input_text']));
                } else {
                    echo json_encode(array('result' => false, 'error' => 'no_content'));
                    wp_die();
                }
                // $preContent = B2S_Util::prepareContent($this->postId, $this->postData->post_content, $this->postUrl, false, (in_array($data->networkId, $this->allowNoEmoji) ? false : true), $this->userLang);
                require_once(B2S_PLUGIN_DIR . 'includes/Options.php');
                $options = new B2S_Options((int) B2S_PLUGIN_BLOG_USER_ID, 'B2S_PLUGIN_USER_TOOL');
                $optionData = $options->_getOption(1);

                $allowEmojis = false;
                if (isset($optionData['settings']['deactivate_emojis'])) {
                    $allowEmojis = (!$optionData['settings']['deactivate_emojis'] ? true : false);
                }
                $postUrl= isset($_POST['post_url'])? esc_url_raw(wp_unslash($_POST['post_url'])): "";
                $postLang= isset($_POST['post_lang'])?sanitize_text_field(wp_unslash($_POST['post_lang'])):"";
                $networkType= isset($_POST['network_type'])? (int) sanitize_text_field(wp_unslash($_POST['network_type'])): 0;
                $networkName= isset($_POST['post_network_name'])? sanitize_text_field(wp_unslash($_POST['post_network_name'])): "";
                $postData = array(
                    'action' => 'assGenerateText',
                    'generate_type' => 'sm',
                    'access_token' => sanitize_text_field($sqlResult->access_token),
                    'post_text' => sanitize_text_field(B2S_Util::prepareContent((int) $_POST['post_id'], $postContent, $postUrl, false, false, $postLang)), // only content
                    'post_network_name' => sanitize_text_field(wp_unslash($networkName)),
                    'post_lang' => sanitize_text_field(wp_unslash($postLang)),
                    'post_network_type' => $networkType,
                    'allow_emojis' => $allowEmojis
                );

                if (isset($_POST['post_format']) && (int) $_POST['post_format'] >= 0) {
                    $postData['post_type'] = (int) $_POST['post_format'];
                }

                $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $postData), true);
                if (is_array($result) && !empty($result)) {
                    if (isset($result['ass_text']) && !empty($result['ass_text']) && isset($result['ass_words_open'])) {
                        $optionData['account']['words_open'] = (int) $result['ass_words_open'];
                        $options->_setOption(1, $optionData);

                        $assText = wp_kses($result['ass_text'], array(
                            'p' => array(),
                            'h1' => array(),
                            'h2' => array(),
                            'h3' => array(),
                            'strong' => array(),
                            'b' => array(),
                            'i' => array(),
                            'br' => array(),
                            'a' => array(
                                'href' => array(),
                                'target' => array(),
                                'class' => array(),
                            ),
                        ));

                        $b2sItem = null;
                        require_once(B2S_PLUGIN_DIR . 'includes/B2S/Ship/Item.php');
                        $generateHashtags = false;
                        if (isset($optionData['settings']['generate_hashtags']) && (bool) $optionData['settings']['generate_hashtags'] == true && isset($result['ass_hashtags']) && !empty($result['ass_hashtags'])) {
                            $generateHashtags = true;
                        }
                        if (isset($optionData['settings']['post_template']) && (bool) $optionData['settings']['post_template'] == true) {
                            $b2sItem = new B2S_Ship_Item(isset($_POST['post_id']) ? (int) $_POST['post_id'] : 0, isset($_POST['post_lang']) ? sanitize_text_field(wp_unslash($_POST['post_lang'])) : 'en', '', isset($_POST['b2s_post_type'])? sanitize_text_field(wp_unslash($_POST['b2s_post_type'])):"", isset($_POST['relay_count']) ? (int) $_POST['relay_count'] : 0, (isset($_POST['is_video_mode']) && (int) $_POST['is_video_mode'] == 1 ? true : false));
                            $networkData = array(
                                'networkId' => isset($_POST['network_id']) ? (int) $_POST['network_id'] : 0,
                                'networkType' => isset($_POST['network_type']) ? (int) $_POST['network_type'] : 0,
                                'networkKind' => isset($_POST['network_kind']) ? (int) $_POST['network_kind'] : 0,
                            );
                            if ($generateHashtags) {
                                $networkData['custom_hashtags'] = $this->prepareAssHashtags($result['ass_hashtags']);
                            }
                            $message = $b2sItem->getMessagebyTemplate((object) $networkData, $assText);
                            if (isset($message) && !empty($message)) {
                                $assText = $message;
                            }
                        } else {
                            if (!isset($b2sItem)) {
                                $b2sItem = new B2S_Ship_Item((int) $_POST['post_id']);
                            }
                            $characterLimits = $b2sItem->getCharacterLimits();
                            if (isset($_POST['post_id']) && isset($_POST['network_id']) && isset($_POST['network_type']) && isset($characterLimits[(int) $_POST['network_type']][(int) $_POST['network_id']]) && (int) $characterLimits[(int) $_POST['network_type']][(int) $_POST['network_id']] > 0) {
                                $networkCharacterLimit = (int) $characterLimits[(int) $_POST['network_type']][(int) $_POST['network_id']];
                                if ($generateHashtags) {
                                    $networkCharacterLimit -= strlen($this->prepareAssHashtags($result['ass_hashtags']));
                                }
                                if (strlen($result['ass_text']) > (int) $characterLimits[(int) $_POST['network_type']][(int) $_POST['network_id']]) {
                                    $assText = B2S_Util::getExcerpt($assText, 0, (int) $characterLimits[(int) $_POST['network_type']][(int) $_POST['network_id']]);
                                }
                                if ($generateHashtags) {
                                    $assText .= $this->prepareAssHashtags($result['ass_hashtags']);
                                }
                            }
                        }
                        echo json_encode(array('result' => true, 'ass_text' => $assText, 'ass_words_open' => (int) $result['ass_words_open']));
                        wp_die();
                    }
                    if (isset($result['error']) && !empty($result['error'])) {
                        echo json_encode(array('result' => false, 'error' => (int) $result['error']));
                        wp_die();
                    }
                }
            }
        }
        echo json_encode(array('result' => false));
        wp_die();
    
    }

    public function assSettingsSave() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        require_once(B2S_PLUGIN_DIR . 'includes/Options.php');
        $options = new B2S_Options((int) B2S_PLUGIN_BLOG_USER_ID, 'B2S_PLUGIN_USER_TOOL');
        $optionData = $options->_getOption(1);
        $optionData['settings']['post_template'] = (isset($_POST['setting_post_template']) && $_POST['setting_post_template'] == 'true' ? true : false);
        $optionData['settings']['deactivate_emojis'] = (isset($_POST['setting_deactivate_emojis']) && $_POST['setting_deactivate_emojis'] == 'true' ? true : false);
        $optionData['settings']['generate_hashtags'] = (isset($_POST['setting_generate_hashtags']) && $_POST['setting_generate_hashtags'] == 'true' ? true : false);
        $options->_setOption(1, $optionData);

        echo json_encode(array('result' => true));
        wp_die();
    
      
    }

    public function assLogout() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        global $wpdb;
        $wpdb->delete($wpdb->prefix . 'b2s_user_tool', array('blog_user_id' => (int) B2S_PLUGIN_BLOG_USER_ID, 'tool_id' => 1), array('%d', '%d'));
        echo json_encode(array('result' => true));
        wp_die();
      
    }

    public function deletePostNoticeAll() {
    
        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }
        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Post/Tools.php');
        echo json_encode(B2S_Post_Tools::deletePostNoticeAll());
        wp_die();
    
    }

    public function checkImageSizeNetwork() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (!isset($_POST['image_url']) || empty($_POST['image_url']) || !isset($_POST['network_id']) || empty($_POST['network_id'])) {
                echo json_encode(array('result' => false));
                wp_die();
            }

        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Ship/Item.php');
        $minImageDimensions = B2S_Ship_Item::getMinImageDimensions();

        $attachementId = attachment_url_to_postid(sanitize_url(wp_unslash($_POST['image_url'])));
        if ((int) $attachementId > 0) {
            $image = wp_get_attachment_image_src($attachementId, 'full');
            if (!is_array($image) || !isset($image[1]) || empty($image[1]) || !isset($image[2]) || empty($image[2])) {
                echo json_encode(array('result' => false));
                wp_die();
            }
            $width = (int) $image[1];
            $height = (int) $image[2];
        } else {
            $image = wp_getimagesize(sanitize_url(wp_unslash($_POST['image_url'])));
            if (!is_array($image) || !isset($image[0]) || empty($image[0]) || !isset($image[1]) || empty($image[1])) {
                echo json_encode(array('result' => false));
                wp_die();
            }
            $width = (int) $image[0];
            $height = (int) $image[1];
        }

        if (isset($minImageDimensions[(int) $_POST['network_id']]) && !empty($minImageDimensions[(int) $_POST['network_id']]) && ($width < $minImageDimensions[(int) $_POST['network_id']][0] || $height < $minImageDimensions[(int) $_POST['network_id']][1])) {
            echo json_encode(array('result' => false, 'error' => array((int) $_POST['network_id'])));
            wp_die();
        }
        echo json_encode(array('result' => true));
        wp_die();
       
    }

    public function checkImageSizeNetworkAll() {

        if (!current_user_can('read') || !check_ajax_referer('b2s_security_nonce', 'b2s_security_nonce', false)) {
            echo wp_json_encode(array('result' => false, 'error' => 'nonce'));
            wp_die();
        }

        if (!isset($_POST['image_url']) || empty($_POST['image_url'])) {
            echo json_encode(array('result' => false));
            wp_die();
        }

        require_once (B2S_PLUGIN_DIR . '/includes/B2S/Ship/Item.php');
        $minImageDimensions = B2S_Ship_Item::getMinImageDimensions();

        $attachementId = attachment_url_to_postid(sanitize_url(wp_unslash($_POST['image_url'])));
        if ((int) $attachementId > 0) {
            $image = wp_get_attachment_image_src($attachementId, 'full');
            if (!is_array($image) || !isset($image[1]) || empty($image[1]) || !isset($image[2]) || empty($image[2])) {
                echo json_encode(array('result' => false));
                wp_die();
            }
            $width = (int) $image[1];
            $height = (int) $image[2];
        } else {
            $image = wp_getimagesize(sanitize_url(wp_unslash($_POST['image_url'])));
            if (!is_array($image) || !isset($image[0]) || empty($image[0]) || !isset($image[1]) || empty($image[1])) {
                echo json_encode(array('result' => false));
                wp_die();
            }
            $width = (int) $image[0];
            $height = (int) $image[1];
        }

        $networks = array();
        foreach ($minImageDimensions as $networkId => $dimensions) {
            if ($width < $dimensions[0] || $height < $dimensions[1]) {
                $networks[] = $networkId;
            }
        }

        if (!empty($networks)) {
            echo json_encode(array('result' => false, 'error' => $networks));
            wp_die();
        }

        echo json_encode(array('result' => true));
        wp_die();
      
    }

    public function prepareAssHashtags(string $hashtags = '') {
        if (!isset($hashtags) || empty($hashtags)) {
            return '';
        }
        return '#' . trim(str_replace(', ', ' #', $hashtags));
    }

    // public function addUserApp() {
    //     if (current_user_can('read') && isset($_POST['b2s_security_nonce']) && (int) wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['b2s_security_nonce'])), 'b2s_security_nonce') > 0) {
    //         $supportedNetworks = unserialize(B2S_PLUGIN_USER_APP_NETWORKS);
    //         if (isset($_POST['app_name']) && !empty($_POST['app_name']) && isset($_POST['network_id']) && !empty($_POST['network_id']) && isset($_POST['app_key']) && !empty($_POST['app_key']) && isset($_POST['app_secret']) && !empty($_POST['app_secret'])) {
    //             $appName = sanitize_text_field($_POST['app_name']);
    //             $appNetwork = (int) $_POST['network_id'];
    //             if (in_array($appNetwork, $supportedNetworks)) {
    //                 //call API app/add endpoint here
    //                 $postData = array('action' => 'addUserApp', 'token' => B2S_PLUGIN_TOKEN,
    //                     "app_name" => $appName,
    //                     "network_id" => $appNetwork,
    //                     "app_key" => sanitize_text_field($_POST['app_key']),
    //                     "app_secret" => sanitize_text_field($_POST['app_secret']),
    //                     "plugin_version" => B2S_PLUGIN_VERSION
    //                 );
    //                 $result = json_decode(B2S_Api_Post::post(B2S_PLUGIN_API_ENDPOINT, $postData));
    //                 if (isset($result->result) && $result->result !== false && isset($result->app_id) && (int) $result->app_id > 0) {
    //                     $editAppText = esc_html__('Edit app data', 'blog2social');
    //                     $deleteAppText = esc_html__('Delete app data', 'blog2social');
    //                     echo json_encode(array("result" => true, "app_id" => $result->app_id, 'app_name' => $appName, 'network_id' => (int) $_POST['network_id'],
    //                         'deleteAppText' => $deleteAppText, 'editAppText' => $editAppText));
    //                     wp_die();
    //                 } else {
    //                     if (isset($result->error_code) && $result->error_code == "APP_PAID") {
    //                         echo json_encode(array("result" => false, "error_code" => $result->error_code));
    //                         wp_die();
    //                     }
    //                 }
    //             }
    //         }
    //         echo json_encode(array("result" => false, "app_id" => -1));
    //         wp_die();
    //     }
    // }
}
