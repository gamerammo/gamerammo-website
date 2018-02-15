<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * TikiCachedContainer.
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class TikiCachedContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->methodMap = array(
            'tiki.controller.access' => 'getTiki_Controller_AccessService',
            'tiki.controller.activitystream' => 'getTiki_Controller_ActivitystreamService',
            'tiki.controller.annotation' => 'getTiki_Controller_AnnotationService',
            'tiki.controller.article' => 'getTiki_Controller_ArticleService',
            'tiki.controller.attribute' => 'getTiki_Controller_AttributeService',
            'tiki.controller.auth_source' => 'getTiki_Controller_AuthSourceService',
            'tiki.controller.autosave' => 'getTiki_Controller_AutosaveService',
            'tiki.controller.bigbluebutton' => 'getTiki_Controller_BigbluebuttonService',
            'tiki.controller.calendar' => 'getTiki_Controller_CalendarService',
            'tiki.controller.category' => 'getTiki_Controller_CategoryService',
            'tiki.controller.comment' => 'getTiki_Controller_CommentService',
            'tiki.controller.connect' => 'getTiki_Controller_ConnectService',
            'tiki.controller.connect_server' => 'getTiki_Controller_ConnectServerService',
            'tiki.controller.contenttemplate' => 'getTiki_Controller_ContenttemplateService',
            'tiki.controller.draw' => 'getTiki_Controller_DrawService',
            'tiki.controller.edit' => 'getTiki_Controller_EditService',
            'tiki.controller.favorite' => 'getTiki_Controller_FavoriteService',
            'tiki.controller.file' => 'getTiki_Controller_FileService',
            'tiki.controller.file_finder' => 'getTiki_Controller_FileFinderService',
            'tiki.controller.forum' => 'getTiki_Controller_ForumService',
            'tiki.controller.goal' => 'getTiki_Controller_GoalService',
            'tiki.controller.group' => 'getTiki_Controller_GroupService',
            'tiki.controller.h5p' => 'getTiki_Controller_H5pService',
            'tiki.controller.kaltura' => 'getTiki_Controller_KalturaService',
            'tiki.controller.language' => 'getTiki_Controller_LanguageService',
            'tiki.controller.mailin' => 'getTiki_Controller_MailinService',
            'tiki.controller.managestream' => 'getTiki_Controller_ManagestreamService',
            'tiki.controller.menu' => 'getTiki_Controller_MenuService',
            'tiki.controller.module' => 'getTiki_Controller_ModuleService',
            'tiki.controller.monitor' => 'getTiki_Controller_MonitorService',
            'tiki.controller.mustread' => 'getTiki_Controller_MustreadService',
            'tiki.controller.oauth' => 'getTiki_Controller_OauthService',
            'tiki.controller.object' => 'getTiki_Controller_ObjectService',
            'tiki.controller.payment' => 'getTiki_Controller_PaymentService',
            'tiki.controller.pivot' => 'getTiki_Controller_PivotService',
            'tiki.controller.plugin' => 'getTiki_Controller_PluginService',
            'tiki.controller.rating' => 'getTiki_Controller_RatingService',
            'tiki.controller.recommendation_dev' => 'getTiki_Controller_RecommendationDevService',
            'tiki.controller.relation' => 'getTiki_Controller_RelationService',
            'tiki.controller.report' => 'getTiki_Controller_ReportService',
            'tiki.controller.scheduler' => 'getTiki_Controller_SchedulerService',
            'tiki.controller.score' => 'getTiki_Controller_ScoreService',
            'tiki.controller.search' => 'getTiki_Controller_SearchService',
            'tiki.controller.search_customsearch' => 'getTiki_Controller_SearchCustomsearchService',
            'tiki.controller.search_manifold' => 'getTiki_Controller_SearchManifoldService',
            'tiki.controller.search_stored' => 'getTiki_Controller_SearchStoredService',
            'tiki.controller.semaphore' => 'getTiki_Controller_SemaphoreService',
            'tiki.controller.showtikiorg' => 'getTiki_Controller_ShowtikiorgService',
            'tiki.controller.social' => 'getTiki_Controller_SocialService',
            'tiki.controller.suite' => 'getTiki_Controller_SuiteService',
            'tiki.controller.tabular' => 'getTiki_Controller_TabularService',
            'tiki.controller.tracker' => 'getTiki_Controller_TrackerService',
            'tiki.controller.tracker_calendar' => 'getTiki_Controller_TrackerCalendarService',
            'tiki.controller.tracker_sync' => 'getTiki_Controller_TrackerSyncService',
            'tiki.controller.tracker_todo' => 'getTiki_Controller_TrackerTodoService',
            'tiki.controller.translation' => 'getTiki_Controller_TranslationService',
            'tiki.controller.user' => 'getTiki_Controller_UserService',
            'tiki.controller.user_conditions' => 'getTiki_Controller_UserConditionsService',
            'tiki.controller.vimeo' => 'getTiki_Controller_VimeoService',
            'tiki.controller.wiki' => 'getTiki_Controller_WikiService',
            'tiki.controller.wiki_structure' => 'getTiki_Controller_WikiStructureService',
            'tiki.controller.workspace' => 'getTiki_Controller_WorkspaceService',
            'tiki.controller.xmpp' => 'getTiki_Controller_XmppService',
            'tiki.lib.access' => 'getTiki_Lib_AccessService',
            'tiki.lib.activity' => 'getTiki_Lib_ActivityService',
            'tiki.lib.admin' => 'getTiki_Lib_AdminService',
            'tiki.lib.areas' => 'getTiki_Lib_AreasService',
            'tiki.lib.art' => 'getTiki_Lib_ArtService',
            'tiki.lib.attribute' => 'getTiki_Lib_AttributeService',
            'tiki.lib.autosave' => 'getTiki_Lib_AutosaveService',
            'tiki.lib.avatar' => 'getTiki_Lib_AvatarService',
            'tiki.lib.banner' => 'getTiki_Lib_BannerService',
            'tiki.lib.bigbluebutton' => 'getTiki_Lib_BigbluebuttonService',
            'tiki.lib.blacklist' => 'getTiki_Lib_BlacklistService',
            'tiki.lib.blog' => 'getTiki_Lib_BlogService',
            'tiki.lib.cache' => 'getTiki_Lib_CacheService',
            'tiki.lib.calendar' => 'getTiki_Lib_CalendarService',
            'tiki.lib.captcha' => 'getTiki_Lib_CaptchaService',
            'tiki.lib.cart' => 'getTiki_Lib_CartService',
            'tiki.lib.categ' => 'getTiki_Lib_CategService',
            'tiki.lib.comments' => 'getTiki_Lib_CommentsService',
            'tiki.lib.connect' => 'getTiki_Lib_ConnectService',
            'tiki.lib.connect_server' => 'getTiki_Lib_ConnectServerService',
            'tiki.lib.contact' => 'getTiki_Lib_ContactService',
            'tiki.lib.contribution' => 'getTiki_Lib_ContributionService',
            'tiki.lib.credits' => 'getTiki_Lib_CreditsService',
            'tiki.lib.crypt' => 'getTiki_Lib_CryptService',
            'tiki.lib.css' => 'getTiki_Lib_CssService',
            'tiki.lib.dcs' => 'getTiki_Lib_DcsService',
            'tiki.lib.edit' => 'getTiki_Lib_EditService',
            'tiki.lib.events' => 'getTiki_Lib_EventsService',
            'tiki.lib.faq' => 'getTiki_Lib_FaqService',
            'tiki.lib.federatedsearch' => 'getTiki_Lib_FederatedsearchService',
            'tiki.lib.filegal' => 'getTiki_Lib_FilegalService',
            'tiki.lib.filegalbatch' => 'getTiki_Lib_FilegalbatchService',
            'tiki.lib.flaggedrevision' => 'getTiki_Lib_FlaggedrevisionService',
            'tiki.lib.freetag' => 'getTiki_Lib_FreetagService',
            'tiki.lib.geo' => 'getTiki_Lib_GeoService',
            'tiki.lib.goal' => 'getTiki_Lib_GoalService',
            'tiki.lib.goalevent' => 'getTiki_Lib_GoaleventService',
            'tiki.lib.goalreward' => 'getTiki_Lib_GoalrewardService',
            'tiki.lib.groupalert' => 'getTiki_Lib_GroupalertService',
            'tiki.lib.h5p' => 'getTiki_Lib_H5pService',
            'tiki.lib.header' => 'getTiki_Lib_HeaderService',
            'tiki.lib.hist' => 'getTiki_Lib_HistService',
            'tiki.lib.iconset' => 'getTiki_Lib_IconsetService',
            'tiki.lib.imagegal' => 'getTiki_Lib_ImagegalService',
            'tiki.lib.kalturaadmin' => 'getTiki_Lib_KalturaadminService',
            'tiki.lib.kalturauser' => 'getTiki_Lib_KalturauserService',
            'tiki.lib.language' => 'getTiki_Lib_LanguageService',
            'tiki.lib.languagetranslations' => 'getTiki_Lib_LanguagetranslationsService',
            'tiki.lib.ldap' => 'getTiki_Lib_LdapService',
            'tiki.lib.login' => 'getTiki_Lib_LoginService',
            'tiki.lib.logs' => 'getTiki_Lib_LogsService',
            'tiki.lib.logsqry' => 'getTiki_Lib_LogsqryService',
            'tiki.lib.mailin' => 'getTiki_Lib_MailinService',
            'tiki.lib.memcache' => 'getTiki_Lib_MemcacheService',
            'tiki.lib.menu' => 'getTiki_Lib_MenuService',
            'tiki.lib.message' => 'getTiki_Lib_MessageService',
            'tiki.lib.mime' => 'getTiki_Lib_MimeService',
            'tiki.lib.mod' => 'getTiki_Lib_ModService',
            'tiki.lib.monitor' => 'getTiki_Lib_MonitorService',
            'tiki.lib.monitormail' => 'getTiki_Lib_MonitormailService',
            'tiki.lib.multilingual' => 'getTiki_Lib_MultilingualService',
            'tiki.lib.notification' => 'getTiki_Lib_NotificationService',
            'tiki.lib.oauth' => 'getTiki_Lib_OauthService',
            'tiki.lib.object' => 'getTiki_Lib_ObjectService',
            'tiki.lib.objectselector' => 'getTiki_Lib_ObjectselectorService',
            'tiki.lib.pagecontent' => 'getTiki_Lib_PagecontentService',
            'tiki.lib.parser' => 'getTiki_Lib_ParserService',
            'tiki.lib.payment' => 'getTiki_Lib_PaymentService',
            'tiki.lib.perspective' => 'getTiki_Lib_PerspectiveService',
            'tiki.lib.poll' => 'getTiki_Lib_PollService',
            'tiki.lib.prefs' => 'getTiki_Lib_PrefsService',
            'tiki.lib.quantify' => 'getTiki_Lib_QuantifyService',
            'tiki.lib.queue' => 'getTiki_Lib_QueueService',
            'tiki.lib.quiz' => 'getTiki_Lib_QuizService',
            'tiki.lib.rating' => 'getTiki_Lib_RatingService',
            'tiki.lib.ratingconfig' => 'getTiki_Lib_RatingconfigService',
            'tiki.lib.recommendationcontentbatch' => 'getTiki_Lib_RecommendationcontentbatchService',
            'tiki.lib.references' => 'getTiki_Lib_ReferencesService',
            'tiki.lib.registration' => 'getTiki_Lib_RegistrationService',
            'tiki.lib.relation' => 'getTiki_Lib_RelationService',
            'tiki.lib.rss' => 'getTiki_Lib_RssService',
            'tiki.lib.scheduler' => 'getTiki_Lib_SchedulerService',
            'tiki.lib.score' => 'getTiki_Lib_ScoreService',
            'tiki.lib.scorm' => 'getTiki_Lib_ScormService',
            'tiki.lib.searchstats' => 'getTiki_Lib_SearchstatsService',
            'tiki.lib.semantic' => 'getTiki_Lib_SemanticService',
            'tiki.lib.service' => 'getTiki_Lib_ServiceService',
            'tiki.lib.sheet' => 'getTiki_Lib_SheetService',
            'tiki.lib.slugmanager' => 'getTiki_Lib_SlugmanagerService',
            'tiki.lib.smarty' => 'getTiki_Lib_SmartyService',
            'tiki.lib.social' => 'getTiki_Lib_SocialService',
            'tiki.lib.stats' => 'getTiki_Lib_StatsService',
            'tiki.lib.storedsearch' => 'getTiki_Lib_StoredsearchService',
            'tiki.lib.struct' => 'getTiki_Lib_StructService',
            'tiki.lib.symbols' => 'getTiki_Lib_SymbolsService',
            'tiki.lib.tabular' => 'getTiki_Lib_TabularService',
            'tiki.lib.template' => 'getTiki_Lib_TemplateService',
            'tiki.lib.theme' => 'getTiki_Lib_ThemeService',
            'tiki.lib.themecontrol' => 'getTiki_Lib_ThemecontrolService',
            'tiki.lib.tikicalendar' => 'getTiki_Lib_TikicalendarService',
            'tiki.lib.tikidate' => 'getTiki_Lib_TikidateService',
            'tiki.lib.todo' => 'getTiki_Lib_TodoService',
            'tiki.lib.trk' => 'getTiki_Lib_TrkService',
            'tiki.lib.unifiedsearch' => 'getTiki_Lib_UnifiedsearchService',
            'tiki.lib.user' => 'getTiki_Lib_UserService',
            'tiki.lib.usermailin' => 'getTiki_Lib_UsermailinService',
            'tiki.lib.usermodules' => 'getTiki_Lib_UsermodulesService',
            'tiki.lib.userprefs' => 'getTiki_Lib_UserprefsService',
            'tiki.lib.validators' => 'getTiki_Lib_ValidatorsService',
            'tiki.lib.vimeo' => 'getTiki_Lib_VimeoService',
            'tiki.lib.wiki' => 'getTiki_Lib_WikiService',
            'tiki.lib.wizard' => 'getTiki_Lib_WizardService',
            'tiki.lib.wysiwyg' => 'getTiki_Lib_WysiwygService',
            'tiki.lib.xmpp' => 'getTiki_Lib_XmppService',
            'tiki.lib.zotero' => 'getTiki_Lib_ZoteroService',
            'tiki.mailin.provider.articleput' => 'getTiki_Mailin_Provider_ArticleputService',
            'tiki.mailin.provider.replyhandler' => 'getTiki_Mailin_Provider_ReplyhandlerService',
            'tiki.mailin.provider.wiki' => 'getTiki_Mailin_Provider_WikiService',
            'tiki.mailin.provider.wikiappend' => 'getTiki_Mailin_Provider_WikiappendService',
            'tiki.mailin.provider.wikiget' => 'getTiki_Mailin_Provider_WikigetService',
            'tiki.mailin.provider.wikiprepend' => 'getTiki_Mailin_Provider_WikiprependService',
            'tiki.mailin.provider.wikiput' => 'getTiki_Mailin_Provider_WikiputService',
            'tiki.mailin.providerlist' => 'getTiki_Mailin_ProviderlistService',
            'tiki.recommendation.activity.store' => 'getTiki_Recommendation_Activity_StoreService',
            'tiki.recommendation.content.set' => 'getTiki_Recommendation_Content_SetService',
            'tiki.wiki.slug.dash' => 'getTiki_Wiki_Slug_DashService',
            'tiki.wiki.slug.underscore' => 'getTiki_Wiki_Slug_UnderscoreService',
            'tiki.wiki.slug.urlencode' => 'getTiki_Wiki_Slug_UrlencodeService',
        );

        $this->aliases = array();
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    /**
     * {@inheritdoc}
     */
    public function isCompiled()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since version 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the 'tiki.controller.access' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Access_Controller A Services_Access_Controller instance
     */
    protected function getTiki_Controller_AccessService()
    {
        return $this->services['tiki.controller.access'] = new \Services_Access_Controller();
    }

    /**
     * Gets the 'tiki.controller.activitystream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_ActivityStream_Controller A Services_ActivityStream_Controller instance
     */
    protected function getTiki_Controller_ActivitystreamService()
    {
        return $this->services['tiki.controller.activitystream'] = new \Services_ActivityStream_Controller();
    }

    /**
     * Gets the 'tiki.controller.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Comment_AnnotationController A Services_Comment_AnnotationController instance
     */
    protected function getTiki_Controller_AnnotationService()
    {
        return $this->services['tiki.controller.annotation'] = new \Services_Comment_AnnotationController();
    }

    /**
     * Gets the 'tiki.controller.article' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Article_Controller A Services_Article_Controller instance
     */
    protected function getTiki_Controller_ArticleService()
    {
        return $this->services['tiki.controller.article'] = new \Services_Article_Controller();
    }

    /**
     * Gets the 'tiki.controller.attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Attribute_Controller A Services_Attribute_Controller instance
     */
    protected function getTiki_Controller_AttributeService()
    {
        return $this->services['tiki.controller.attribute'] = new \Services_Attribute_Controller();
    }

    /**
     * Gets the 'tiki.controller.auth_source' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_AuthSource_Controller A Services_AuthSource_Controller instance
     */
    protected function getTiki_Controller_AuthSourceService()
    {
        return $this->services['tiki.controller.auth_source'] = new \Services_AuthSource_Controller();
    }

    /**
     * Gets the 'tiki.controller.autosave' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_AutoSave_Controller A Services_AutoSave_Controller instance
     */
    protected function getTiki_Controller_AutosaveService()
    {
        return $this->services['tiki.controller.autosave'] = new \Services_AutoSave_Controller();
    }

    /**
     * Gets the 'tiki.controller.bigbluebutton' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_BigBlueButton_Controller A Services_BigBlueButton_Controller instance
     */
    protected function getTiki_Controller_BigbluebuttonService()
    {
        return $this->services['tiki.controller.bigbluebutton'] = new \Services_BigBlueButton_Controller();
    }

    /**
     * Gets the 'tiki.controller.calendar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Calendar_Controller A Services_Calendar_Controller instance
     */
    protected function getTiki_Controller_CalendarService()
    {
        return $this->services['tiki.controller.calendar'] = new \Services_Calendar_Controller();
    }

    /**
     * Gets the 'tiki.controller.category' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Category_Controller A Services_Category_Controller instance
     */
    protected function getTiki_Controller_CategoryService()
    {
        return $this->services['tiki.controller.category'] = new \Services_Category_Controller();
    }

    /**
     * Gets the 'tiki.controller.comment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Comment_Controller A Services_Comment_Controller instance
     */
    protected function getTiki_Controller_CommentService()
    {
        return $this->services['tiki.controller.comment'] = new \Services_Comment_Controller();
    }

    /**
     * Gets the 'tiki.controller.connect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Connect_Client A Services_Connect_Client instance
     */
    protected function getTiki_Controller_ConnectService()
    {
        return $this->services['tiki.controller.connect'] = new \Services_Connect_Client();
    }

    /**
     * Gets the 'tiki.controller.connect_server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Connect_Server A Services_Connect_Server instance
     */
    protected function getTiki_Controller_ConnectServerService()
    {
        return $this->services['tiki.controller.connect_server'] = new \Services_Connect_Server();
    }

    /**
     * Gets the 'tiki.controller.contenttemplate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_ContentTemplate_Controller A Services_ContentTemplate_Controller instance
     */
    protected function getTiki_Controller_ContenttemplateService()
    {
        return $this->services['tiki.controller.contenttemplate'] = new \Services_ContentTemplate_Controller();
    }

    /**
     * Gets the 'tiki.controller.draw' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Draw_Controller A Services_Draw_Controller instance
     */
    protected function getTiki_Controller_DrawService()
    {
        return $this->services['tiki.controller.draw'] = new \Services_Draw_Controller();
    }

    /**
     * Gets the 'tiki.controller.edit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Edit_Controller A Services_Edit_Controller instance
     */
    protected function getTiki_Controller_EditService()
    {
        return $this->services['tiki.controller.edit'] = new \Services_Edit_Controller();
    }

    /**
     * Gets the 'tiki.controller.favorite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_User_FavoriteController A Services_User_FavoriteController instance
     */
    protected function getTiki_Controller_FavoriteService()
    {
        return $this->services['tiki.controller.favorite'] = new \Services_User_FavoriteController();
    }

    /**
     * Gets the 'tiki.controller.file' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_File_Controller A Services_File_Controller instance
     */
    protected function getTiki_Controller_FileService()
    {
        return $this->services['tiki.controller.file'] = new \Services_File_Controller();
    }

    /**
     * Gets the 'tiki.controller.file_finder' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_File_FinderController A Services_File_FinderController instance
     */
    protected function getTiki_Controller_FileFinderService()
    {
        return $this->services['tiki.controller.file_finder'] = new \Services_File_FinderController();
    }

    /**
     * Gets the 'tiki.controller.forum' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Forum_Controller A Services_Forum_Controller instance
     */
    protected function getTiki_Controller_ForumService()
    {
        return $this->services['tiki.controller.forum'] = new \Services_Forum_Controller();
    }

    /**
     * Gets the 'tiki.controller.goal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Goal_Controller A Services_Goal_Controller instance
     */
    protected function getTiki_Controller_GoalService()
    {
        return $this->services['tiki.controller.goal'] = new \Services_Goal_Controller();
    }

    /**
     * Gets the 'tiki.controller.group' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Group_Controller A Services_Group_Controller instance
     */
    protected function getTiki_Controller_GroupService()
    {
        return $this->services['tiki.controller.group'] = new \Services_Group_Controller();
    }

    /**
     * Gets the 'tiki.controller.h5p' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_H5P_Controller A Services_H5P_Controller instance
     */
    protected function getTiki_Controller_H5pService()
    {
        return $this->services['tiki.controller.h5p'] = new \Services_H5P_Controller();
    }

    /**
     * Gets the 'tiki.controller.kaltura' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Kaltura_Controller A Services_Kaltura_Controller instance
     */
    protected function getTiki_Controller_KalturaService()
    {
        return $this->services['tiki.controller.kaltura'] = new \Services_Kaltura_Controller();
    }

    /**
     * Gets the 'tiki.controller.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Language_Controller A Services_Language_Controller instance
     */
    protected function getTiki_Controller_LanguageService()
    {
        return $this->services['tiki.controller.language'] = new \Services_Language_Controller();
    }

    /**
     * Gets the 'tiki.controller.mailin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_MailIn_Controller A Services_MailIn_Controller instance
     */
    protected function getTiki_Controller_MailinService()
    {
        return $this->services['tiki.controller.mailin'] = new \Services_MailIn_Controller();
    }

    /**
     * Gets the 'tiki.controller.managestream' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_ActivityStream_ManageController A Services_ActivityStream_ManageController instance
     */
    protected function getTiki_Controller_ManagestreamService()
    {
        return $this->services['tiki.controller.managestream'] = new \Services_ActivityStream_ManageController();
    }

    /**
     * Gets the 'tiki.controller.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Menu_Controller A Services_Menu_Controller instance
     */
    protected function getTiki_Controller_MenuService()
    {
        return $this->services['tiki.controller.menu'] = new \Services_Menu_Controller();
    }

    /**
     * Gets the 'tiki.controller.module' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Module_Controller A Services_Module_Controller instance
     */
    protected function getTiki_Controller_ModuleService()
    {
        return $this->services['tiki.controller.module'] = new \Services_Module_Controller();
    }

    /**
     * Gets the 'tiki.controller.monitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_User_MonitorController A Services_User_MonitorController instance
     */
    protected function getTiki_Controller_MonitorService()
    {
        return $this->services['tiki.controller.monitor'] = new \Services_User_MonitorController();
    }

    /**
     * Gets the 'tiki.controller.mustread' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_MustRead_Controller A Services_MustRead_Controller instance
     */
    protected function getTiki_Controller_MustreadService()
    {
        return $this->services['tiki.controller.mustread'] = new \Services_MustRead_Controller();
    }

    /**
     * Gets the 'tiki.controller.oauth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_AuthSource_OAuthController A Services_AuthSource_OAuthController instance
     */
    protected function getTiki_Controller_OauthService()
    {
        return $this->services['tiki.controller.oauth'] = new \Services_AuthSource_OAuthController();
    }

    /**
     * Gets the 'tiki.controller.object' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Object_Controller A Services_Object_Controller instance
     */
    protected function getTiki_Controller_ObjectService()
    {
        return $this->services['tiki.controller.object'] = new \Services_Object_Controller();
    }

    /**
     * Gets the 'tiki.controller.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Payment_Controller A Services_Payment_Controller instance
     */
    protected function getTiki_Controller_PaymentService()
    {
        return $this->services['tiki.controller.payment'] = new \Services_Payment_Controller();
    }

    /**
     * Gets the 'tiki.controller.pivot' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Pivot_Controller A Services_Pivot_Controller instance
     */
    protected function getTiki_Controller_PivotService()
    {
        return $this->services['tiki.controller.pivot'] = new \Services_Pivot_Controller();
    }

    /**
     * Gets the 'tiki.controller.plugin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Edit_PluginController A Services_Edit_PluginController instance
     */
    protected function getTiki_Controller_PluginService()
    {
        return $this->services['tiki.controller.plugin'] = new \Services_Edit_PluginController();
    }

    /**
     * Gets the 'tiki.controller.rating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Rating_Controller A Services_Rating_Controller instance
     */
    protected function getTiki_Controller_RatingService()
    {
        return $this->services['tiki.controller.rating'] = new \Services_Rating_Controller();
    }

    /**
     * Gets the 'tiki.controller.recommendation_dev' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Recommendation_DevelopmentController A Services_Recommendation_DevelopmentController instance
     */
    protected function getTiki_Controller_RecommendationDevService()
    {
        return $this->services['tiki.controller.recommendation_dev'] = new \Services_Recommendation_DevelopmentController();
    }

    /**
     * Gets the 'tiki.controller.relation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Relation_Controller A Services_Relation_Controller instance
     */
    protected function getTiki_Controller_RelationService()
    {
        return $this->services['tiki.controller.relation'] = new \Services_Relation_Controller();
    }

    /**
     * Gets the 'tiki.controller.report' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Report_Controller A Services_Report_Controller instance
     */
    protected function getTiki_Controller_ReportService()
    {
        return $this->services['tiki.controller.report'] = new \Services_Report_Controller();
    }

    /**
     * Gets the 'tiki.controller.scheduler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Scheduler_Controller A Services_Scheduler_Controller instance
     */
    protected function getTiki_Controller_SchedulerService()
    {
        return $this->services['tiki.controller.scheduler'] = new \Services_Scheduler_Controller();
    }

    /**
     * Gets the 'tiki.controller.score' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Score_Controller A Services_Score_Controller instance
     */
    protected function getTiki_Controller_ScoreService()
    {
        return $this->services['tiki.controller.score'] = new \Services_Score_Controller();
    }

    /**
     * Gets the 'tiki.controller.search' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Search_Controller A Services_Search_Controller instance
     */
    protected function getTiki_Controller_SearchService()
    {
        return $this->services['tiki.controller.search'] = new \Services_Search_Controller();
    }

    /**
     * Gets the 'tiki.controller.search_customsearch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Search_CustomSearchController A Services_Search_CustomSearchController instance
     */
    protected function getTiki_Controller_SearchCustomsearchService()
    {
        return $this->services['tiki.controller.search_customsearch'] = new \Services_Search_CustomSearchController();
    }

    /**
     * Gets the 'tiki.controller.search_manifold' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Search_ManifoldController A Services_Search_ManifoldController instance
     */
    protected function getTiki_Controller_SearchManifoldService()
    {
        return $this->services['tiki.controller.search_manifold'] = new \Services_Search_ManifoldController();
    }

    /**
     * Gets the 'tiki.controller.search_stored' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Search_StoredController A Services_Search_StoredController instance
     */
    protected function getTiki_Controller_SearchStoredService()
    {
        return $this->services['tiki.controller.search_stored'] = new \Services_Search_StoredController();
    }

    /**
     * Gets the 'tiki.controller.semaphore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Edit_SemaphoreController A Services_Edit_SemaphoreController instance
     */
    protected function getTiki_Controller_SemaphoreService()
    {
        return $this->services['tiki.controller.semaphore'] = new \Services_Edit_SemaphoreController();
    }

    /**
     * Gets the 'tiki.controller.showtikiorg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_ShowTikiOrg_Controller A Services_ShowTikiOrg_Controller instance
     */
    protected function getTiki_Controller_ShowtikiorgService()
    {
        return $this->services['tiki.controller.showtikiorg'] = new \Services_ShowTikiOrg_Controller();
    }

    /**
     * Gets the 'tiki.controller.social' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_User_SocialController A Services_User_SocialController instance
     */
    protected function getTiki_Controller_SocialService()
    {
        return $this->services['tiki.controller.social'] = new \Services_User_SocialController();
    }

    /**
     * Gets the 'tiki.controller.suite' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Suite_Controller A Services_Suite_Controller instance
     */
    protected function getTiki_Controller_SuiteService()
    {
        return $this->services['tiki.controller.suite'] = new \Services_Suite_Controller();
    }

    /**
     * Gets the 'tiki.controller.tabular' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Tracker_TabularController A Services_Tracker_TabularController instance
     */
    protected function getTiki_Controller_TabularService()
    {
        return $this->services['tiki.controller.tabular'] = new \Services_Tracker_TabularController();
    }

    /**
     * Gets the 'tiki.controller.tracker' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Tracker_Controller A Services_Tracker_Controller instance
     */
    protected function getTiki_Controller_TrackerService()
    {
        return $this->services['tiki.controller.tracker'] = new \Services_Tracker_Controller();
    }

    /**
     * Gets the 'tiki.controller.tracker_calendar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Tracker_CalendarController A Services_Tracker_CalendarController instance
     */
    protected function getTiki_Controller_TrackerCalendarService()
    {
        return $this->services['tiki.controller.tracker_calendar'] = new \Services_Tracker_CalendarController();
    }

    /**
     * Gets the 'tiki.controller.tracker_sync' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Tracker_SyncController A Services_Tracker_SyncController instance
     */
    protected function getTiki_Controller_TrackerSyncService()
    {
        return $this->services['tiki.controller.tracker_sync'] = new \Services_Tracker_SyncController();
    }

    /**
     * Gets the 'tiki.controller.tracker_todo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Tracker_TodoController A Services_Tracker_TodoController instance
     */
    protected function getTiki_Controller_TrackerTodoService()
    {
        return $this->services['tiki.controller.tracker_todo'] = new \Services_Tracker_TodoController();
    }

    /**
     * Gets the 'tiki.controller.translation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Language_TranslationController A Services_Language_TranslationController instance
     */
    protected function getTiki_Controller_TranslationService()
    {
        return $this->services['tiki.controller.translation'] = new \Services_Language_TranslationController();
    }

    /**
     * Gets the 'tiki.controller.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_User_Controller A Services_User_Controller instance
     */
    protected function getTiki_Controller_UserService()
    {
        return $this->services['tiki.controller.user'] = new \Services_User_Controller();
    }

    /**
     * Gets the 'tiki.controller.user_conditions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_User_ConditionsController A Services_User_ConditionsController instance
     */
    protected function getTiki_Controller_UserConditionsService()
    {
        return $this->services['tiki.controller.user_conditions'] = new \Services_User_ConditionsController();
    }

    /**
     * Gets the 'tiki.controller.vimeo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_File_VimeoController A Services_File_VimeoController instance
     */
    protected function getTiki_Controller_VimeoService()
    {
        return $this->services['tiki.controller.vimeo'] = new \Services_File_VimeoController();
    }

    /**
     * Gets the 'tiki.controller.wiki' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Wiki_Controller A Services_Wiki_Controller instance
     */
    protected function getTiki_Controller_WikiService()
    {
        return $this->services['tiki.controller.wiki'] = new \Services_Wiki_Controller();
    }

    /**
     * Gets the 'tiki.controller.wiki_structure' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Wiki_StructureController A Services_Wiki_StructureController instance
     */
    protected function getTiki_Controller_WikiStructureService()
    {
        return $this->services['tiki.controller.wiki_structure'] = new \Services_Wiki_StructureController();
    }

    /**
     * Gets the 'tiki.controller.workspace' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Workspace_Controller A Services_Workspace_Controller instance
     */
    protected function getTiki_Controller_WorkspaceService()
    {
        return $this->services['tiki.controller.workspace'] = new \Services_Workspace_Controller();
    }

    /**
     * Gets the 'tiki.controller.xmpp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Services_Xmpp_Controller A Services_Xmpp_Controller instance
     */
    protected function getTiki_Controller_XmppService()
    {
        return $this->services['tiki.controller.xmpp'] = new \Services_Xmpp_Controller();
    }

    /**
     * Gets the 'tiki.lib.access' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TikiAccessLib A TikiAccessLib instance
     */
    protected function getTiki_Lib_AccessService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/tikiaccesslib.php';

        return $this->services['tiki.lib.access'] = new \TikiAccessLib();
    }

    /**
     * Gets the 'tiki.lib.activity' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ActivityLib A ActivityLib instance
     */
    protected function getTiki_Lib_ActivityService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/activity/activitylib.php';

        return $this->services['tiki.lib.activity'] = new \ActivityLib();
    }

    /**
     * Gets the 'tiki.lib.admin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AdminLib A AdminLib instance
     */
    protected function getTiki_Lib_AdminService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/admin/adminlib.php';

        return $this->services['tiki.lib.admin'] = new \AdminLib();
    }

    /**
     * Gets the 'tiki.lib.areas' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AreasLib A AreasLib instance
     */
    protected function getTiki_Lib_AreasService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/perspective/binderlib.php';

        return $this->services['tiki.lib.areas'] = new \AreasLib();
    }

    /**
     * Gets the 'tiki.lib.art' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ArtLib A ArtLib instance
     */
    protected function getTiki_Lib_ArtService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/articles/artlib.php';

        return $this->services['tiki.lib.art'] = new \ArtLib();
    }

    /**
     * Gets the 'tiki.lib.attribute' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AttributeLib A AttributeLib instance
     */
    protected function getTiki_Lib_AttributeService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/attributes/attributelib.php';

        return $this->services['tiki.lib.attribute'] = new \AttributeLib();
    }

    /**
     * Gets the 'tiki.lib.autosave' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AutoSaveLib A AutoSaveLib instance
     */
    protected function getTiki_Lib_AutosaveService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/ajax/autosave.php';

        return $this->services['tiki.lib.autosave'] = new \AutoSaveLib();
    }

    /**
     * Gets the 'tiki.lib.avatar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \AvatarLib A AvatarLib instance
     */
    protected function getTiki_Lib_AvatarService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/avatarlib.php';

        return $this->services['tiki.lib.avatar'] = new \AvatarLib();
    }

    /**
     * Gets the 'tiki.lib.banner' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \BannerLib A BannerLib instance
     */
    protected function getTiki_Lib_BannerService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/banners/bannerlib.php';

        return $this->services['tiki.lib.banner'] = new \BannerLib();
    }

    /**
     * Gets the 'tiki.lib.bigbluebutton' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \BigBlueButtonLib A BigBlueButtonLib instance
     */
    protected function getTiki_Lib_BigbluebuttonService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/bigbluebuttonlib.php';

        return $this->services['tiki.lib.bigbluebutton'] = new \BigBlueButtonLib();
    }

    /**
     * Gets the 'tiki.lib.blacklist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \blacklistLib A blacklistLib instance
     */
    protected function getTiki_Lib_BlacklistService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/user/blacklistlib.php';

        return $this->services['tiki.lib.blacklist'] = new \blacklistLib();
    }

    /**
     * Gets the 'tiki.lib.blog' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \BlogLib A BlogLib instance
     */
    protected function getTiki_Lib_BlogService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/blogs/bloglib.php';

        return $this->services['tiki.lib.blog'] = new \BlogLib();
    }

    /**
     * Gets the 'tiki.lib.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CacheLib A CacheLib instance
     */
    protected function getTiki_Lib_CacheService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/cache/cachelib.php';

        return $this->services['tiki.lib.cache'] = new \CacheLib();
    }

    /**
     * Gets the 'tiki.lib.calendar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CalendarLib A CalendarLib instance
     */
    protected function getTiki_Lib_CalendarService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/calendar/calendarlib.php';

        return $this->services['tiki.lib.calendar'] = new \CalendarLib();
    }

    /**
     * Gets the 'tiki.lib.captcha' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Captcha A Captcha instance
     */
    protected function getTiki_Lib_CaptchaService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/captcha/captchalib.php';

        return $this->services['tiki.lib.captcha'] = new \Captcha();
    }

    /**
     * Gets the 'tiki.lib.cart' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CartLib A CartLib instance
     */
    protected function getTiki_Lib_CartService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/payment/cartlib.php';

        return $this->services['tiki.lib.cart'] = new \CartLib();
    }

    /**
     * Gets the 'tiki.lib.categ' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CategLib A CategLib instance
     */
    protected function getTiki_Lib_CategService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/categories/categlib.php';

        return $this->services['tiki.lib.categ'] = new \CategLib();
    }

    /**
     * Gets the 'tiki.lib.comments' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Comments A Comments instance
     */
    protected function getTiki_Lib_CommentsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/comments/commentslib.php';

        return $this->services['tiki.lib.comments'] = new \Comments();
    }

    /**
     * Gets the 'tiki.lib.connect' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki_Connect_Client A Tiki_Connect_Client instance
     */
    protected function getTiki_Lib_ConnectService()
    {
        return $this->services['tiki.lib.connect'] = new \Tiki_Connect_Client();
    }

    /**
     * Gets the 'tiki.lib.connect_server' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki_Connect_Server A Tiki_Connect_Server instance
     */
    protected function getTiki_Lib_ConnectServerService()
    {
        return $this->services['tiki.lib.connect_server'] = new \Tiki_Connect_Server();
    }

    /**
     * Gets the 'tiki.lib.contact' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ContactLib A ContactLib instance
     */
    protected function getTiki_Lib_ContactService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/webmail/contactlib.php';

        return $this->services['tiki.lib.contact'] = new \ContactLib();
    }

    /**
     * Gets the 'tiki.lib.contribution' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ContributionLib A ContributionLib instance
     */
    protected function getTiki_Lib_ContributionService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/contribution/contributionlib.php';

        return $this->services['tiki.lib.contribution'] = new \ContributionLib();
    }

    /**
     * Gets the 'tiki.lib.credits' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CreditsLib A CreditsLib instance
     */
    protected function getTiki_Lib_CreditsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/credits/creditslib.php';

        return $this->services['tiki.lib.credits'] = new \CreditsLib();
    }

    /**
     * Gets the 'tiki.lib.crypt' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \CryptLib A CryptLib instance
     */
    protected function getTiki_Lib_CryptService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/crypt/cryptlib.php';

        return $this->services['tiki.lib.crypt'] = new \CryptLib();
    }

    /**
     * Gets the 'tiki.lib.css' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \cssLib A cssLib instance
     */
    protected function getTiki_Lib_CssService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/csslib.php';

        return $this->services['tiki.lib.css'] = new \cssLib();
    }

    /**
     * Gets the 'tiki.lib.dcs' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \DCSLib A DCSLib instance
     */
    protected function getTiki_Lib_DcsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/dcs/dcslib.php';

        return $this->services['tiki.lib.dcs'] = new \DCSLib();
    }

    /**
     * Gets the 'tiki.lib.edit' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \EditLib A EditLib instance
     */
    protected function getTiki_Lib_EditService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wiki/editlib.php';

        return $this->services['tiki.lib.edit'] = new \EditLib();
    }

    /**
     * Gets the 'tiki.lib.events' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki_Event_Manager A Tiki_Event_Manager instance
     */
    protected function getTiki_Lib_EventsService()
    {
        return $this->services['tiki.lib.events'] = new \Tiki_Event_Manager();
    }

    /**
     * Gets the 'tiki.lib.faq' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FaqLib A FaqLib instance
     */
    protected function getTiki_Lib_FaqService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/faqs/faqlib.php';

        return $this->services['tiki.lib.faq'] = new \FaqLib();
    }

    /**
     * Gets the 'tiki.lib.federatedsearch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FederatedSearchLib A FederatedSearchLib instance
     */
    protected function getTiki_Lib_FederatedsearchService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/search/federatedsearchlib.php';

        return $this->services['tiki.lib.federatedsearch'] = new \FederatedSearchLib(${($_ = isset($this->services['tiki.lib.unifiedsearch']) ? $this->services['tiki.lib.unifiedsearch'] : $this->get('tiki.lib.unifiedsearch')) && false ?: '_'});
    }

    /**
     * Gets the 'tiki.lib.filegal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FileGalLib A FileGalLib instance
     */
    protected function getTiki_Lib_FilegalService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/filegals/filegallib.php';

        return $this->services['tiki.lib.filegal'] = new \FileGalLib();
    }

    /**
     * Gets the 'tiki.lib.filegalbatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FileGalBatchLib A FileGalBatchLib instance
     */
    protected function getTiki_Lib_FilegalbatchService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/filegals/filegalbatchlib.php';

        return $this->services['tiki.lib.filegalbatch'] = new \FileGalBatchLib();
    }

    /**
     * Gets the 'tiki.lib.flaggedrevision' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FlaggedRevisionLib A FlaggedRevisionLib instance
     */
    protected function getTiki_Lib_FlaggedrevisionService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wiki/flaggedrevisionlib.php';

        return $this->services['tiki.lib.flaggedrevision'] = new \FlaggedRevisionLib();
    }

    /**
     * Gets the 'tiki.lib.freetag' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \FreetagLib A FreetagLib instance
     */
    protected function getTiki_Lib_FreetagService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/freetag/freetaglib.php';

        return $this->services['tiki.lib.freetag'] = new \FreetagLib();
    }

    /**
     * Gets the 'tiki.lib.geo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GeoLib A GeoLib instance
     */
    protected function getTiki_Lib_GeoService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/geo/geolib.php';

        return $this->services['tiki.lib.geo'] = new \GeoLib();
    }

    /**
     * Gets the 'tiki.lib.goal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GoalLib A GoalLib instance
     */
    protected function getTiki_Lib_GoalService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/goal/goallib.php';

        return $this->services['tiki.lib.goal'] = new \GoalLib();
    }

    /**
     * Gets the 'tiki.lib.goalevent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GoalEventLib A GoalEventLib instance
     */
    protected function getTiki_Lib_GoaleventService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/goal/eventlib.php';

        return $this->services['tiki.lib.goalevent'] = new \GoalEventLib();
    }

    /**
     * Gets the 'tiki.lib.goalreward' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GoalRewardLib A GoalRewardLib instance
     */
    protected function getTiki_Lib_GoalrewardService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/goal/rewardlib.php';

        return $this->services['tiki.lib.goalreward'] = new \GoalRewardLib();
    }

    /**
     * Gets the 'tiki.lib.groupalert' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \GroupAlertLib A GroupAlertLib instance
     */
    protected function getTiki_Lib_GroupalertService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/groupalert/groupalertlib.php';

        return $this->services['tiki.lib.groupalert'] = new \GroupAlertLib();
    }

    /**
     * Gets the 'tiki.lib.h5p' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \H5PLib A H5PLib instance
     */
    protected function getTiki_Lib_H5pService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/filegals/h5plib.php';

        return $this->services['tiki.lib.h5p'] = new \H5PLib();
    }

    /**
     * Gets the 'tiki.lib.header' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HeaderLib A HeaderLib instance
     */
    protected function getTiki_Lib_HeaderService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/headerlib.php';

        return $this->services['tiki.lib.header'] = new \HeaderLib();
    }

    /**
     * Gets the 'tiki.lib.hist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \HistLib A HistLib instance
     */
    protected function getTiki_Lib_HistService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wiki/histlib.php';

        return $this->services['tiki.lib.hist'] = new \HistLib();
    }

    /**
     * Gets the 'tiki.lib.iconset' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \IconsetLib A IconsetLib instance
     */
    protected function getTiki_Lib_IconsetService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/theme/iconsetlib.php';

        return $this->services['tiki.lib.iconset'] = new \IconsetLib();
    }

    /**
     * Gets the 'tiki.lib.imagegal' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ImageGalsLib A ImageGalsLib instance
     */
    protected function getTiki_Lib_ImagegalService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/imagegals/imagegallib.php';

        return $this->services['tiki.lib.imagegal'] = new \ImageGalsLib();
    }

    /**
     * Gets the 'tiki.lib.kalturaadmin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \KalturaLib A KalturaLib instance
     */
    protected function getTiki_Lib_KalturaadminService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/videogals/kalturalib.php';

        return $this->services['tiki.lib.kalturaadmin'] = new \KalturaLib('2');
    }

    /**
     * Gets the 'tiki.lib.kalturauser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \KalturaLib A KalturaLib instance
     */
    protected function getTiki_Lib_KalturauserService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/videogals/kalturalib.php';

        return $this->services['tiki.lib.kalturauser'] = new \KalturaLib('0');
    }

    /**
     * Gets the 'tiki.lib.language' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Language A Language instance
     */
    protected function getTiki_Lib_LanguageService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/language/Language.php';

        return $this->services['tiki.lib.language'] = new \Language();
    }

    /**
     * Gets the 'tiki.lib.languagetranslations' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \LanguageTranslations A LanguageTranslations instance
     */
    protected function getTiki_Lib_LanguagetranslationsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/language/LanguageTranslations.php';

        return $this->services['tiki.lib.languagetranslations'] = new \LanguageTranslations();
    }

    /**
     * Gets the 'tiki.lib.ldap' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \LdapLib A LdapLib instance
     */
    protected function getTiki_Lib_LdapService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/ldap/ldaplib.php';

        return $this->services['tiki.lib.ldap'] = new \LdapLib();
    }

    /**
     * Gets the 'tiki.lib.login' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \LoginLib A LoginLib instance
     */
    protected function getTiki_Lib_LoginService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/loginlib.php';

        return $this->services['tiki.lib.login'] = new \LoginLib();
    }

    /**
     * Gets the 'tiki.lib.logs' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \LogsLib A LogsLib instance
     */
    protected function getTiki_Lib_LogsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/logs/logslib.php';

        return $this->services['tiki.lib.logs'] = new \LogsLib();
    }

    /**
     * Gets the 'tiki.lib.logsqry' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \LogsQueryLib A LogsQueryLib instance
     */
    protected function getTiki_Lib_LogsqryService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/logs/logsquerylib.php';

        return $this->services['tiki.lib.logsqry'] = new \LogsQueryLib();
    }

    /**
     * Gets the 'tiki.lib.mailin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MailinLib A MailinLib instance
     */
    protected function getTiki_Lib_MailinService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/mailin/mailinlib.php';

        return $this->services['tiki.lib.mailin'] = new \MailinLib();
    }

    /**
     * Gets the 'tiki.lib.memcache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Memcachelib A Memcachelib instance
     */
    protected function getTiki_Lib_MemcacheService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/cache/memcachelib.php';

        return $this->services['tiki.lib.memcache'] = new \Memcachelib();
    }

    /**
     * Gets the 'tiki.lib.menu' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MenuLib A MenuLib instance
     */
    protected function getTiki_Lib_MenuService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/menubuilder/menulib.php';

        return $this->services['tiki.lib.menu'] = new \MenuLib();
    }

    /**
     * Gets the 'tiki.lib.message' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Messu A Messu instance
     */
    protected function getTiki_Lib_MessageService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/messu/messulib.php';

        return $this->services['tiki.lib.message'] = new \Messu();
    }

    /**
     * Gets the 'tiki.lib.mime' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MimeLib A MimeLib instance
     */
    protected function getTiki_Lib_MimeService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/mime/mimelib.php';

        return $this->services['tiki.lib.mime'] = new \MimeLib();
    }

    /**
     * Gets the 'tiki.lib.mod' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ModLib A ModLib instance
     */
    protected function getTiki_Lib_ModService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/modules/modlib.php';

        return $this->services['tiki.lib.mod'] = new \ModLib();
    }

    /**
     * Gets the 'tiki.lib.monitor' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MonitorLib A MonitorLib instance
     */
    protected function getTiki_Lib_MonitorService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/user/monitorlib.php';

        return $this->services['tiki.lib.monitor'] = new \MonitorLib();
    }

    /**
     * Gets the 'tiki.lib.monitormail' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MonitorMailLib A MonitorMailLib instance
     */
    protected function getTiki_Lib_MonitormailService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/user/monitormaillib.php';

        return $this->services['tiki.lib.monitormail'] = new \MonitorMailLib();
    }

    /**
     * Gets the 'tiki.lib.multilingual' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \MultilingualLib A MultilingualLib instance
     */
    protected function getTiki_Lib_MultilingualService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/multilingual/multilinguallib.php';

        return $this->services['tiki.lib.multilingual'] = new \MultilingualLib();
    }

    /**
     * Gets the 'tiki.lib.notification' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \NotificationLib A NotificationLib instance
     */
    protected function getTiki_Lib_NotificationService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/notifications/notificationlib.php';

        return $this->services['tiki.lib.notification'] = new \NotificationLib();
    }

    /**
     * Gets the 'tiki.lib.oauth' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \OAuthLib A OAuthLib instance
     */
    protected function getTiki_Lib_OauthService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/oauthlib.php';

        return $this->services['tiki.lib.oauth'] = new \OAuthLib();
    }

    /**
     * Gets the 'tiki.lib.object' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ObjectLib A ObjectLib instance
     */
    protected function getTiki_Lib_ObjectService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/objectlib.php';

        return $this->services['tiki.lib.object'] = new \ObjectLib();
    }

    /**
     * Gets the 'tiki.lib.objectselector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Object\Selector A Tiki\Object\Selector instance
     */
    protected function getTiki_Lib_ObjectselectorService()
    {
        return $this->services['tiki.lib.objectselector'] = new \Tiki\Object\Selector(${($_ = isset($this->services['tiki.lib.object']) ? $this->services['tiki.lib.object'] : $this->get('tiki.lib.object')) && false ?: '_'});
    }

    /**
     * Gets the 'tiki.lib.pagecontent' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PageContentLib A PageContentLib instance
     */
    protected function getTiki_Lib_PagecontentService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/rss/pagecontentlib.php';

        return $this->services['tiki.lib.pagecontent'] = new \PageContentLib();
    }

    /**
     * Gets the 'tiki.lib.parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ParserLib A ParserLib instance
     */
    protected function getTiki_Lib_ParserService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/parser/parserlib.php';

        return $this->services['tiki.lib.parser'] = new \ParserLib();
    }

    /**
     * Gets the 'tiki.lib.payment' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PaymentLib A PaymentLib instance
     */
    protected function getTiki_Lib_PaymentService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/payment/paymentlib.php';

        return $this->services['tiki.lib.payment'] = new \PaymentLib();
    }

    /**
     * Gets the 'tiki.lib.perspective' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PerspectiveLib A PerspectiveLib instance
     */
    protected function getTiki_Lib_PerspectiveService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/perspectivelib.php';

        return $this->services['tiki.lib.perspective'] = new \PerspectiveLib();
    }

    /**
     * Gets the 'tiki.lib.poll' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PollLib A PollLib instance
     */
    protected function getTiki_Lib_PollService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/polls/polllib.php';

        return $this->services['tiki.lib.poll'] = new \PollLib();
    }

    /**
     * Gets the 'tiki.lib.prefs' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \PreferencesLib A PreferencesLib instance
     */
    protected function getTiki_Lib_PrefsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/prefslib.php';

        return $this->services['tiki.lib.prefs'] = new \PreferencesLib();
    }

    /**
     * Gets the 'tiki.lib.quantify' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \QuantifyLib A QuantifyLib instance
     */
    protected function getTiki_Lib_QuantifyService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wiki/quantifylib.php';

        return $this->services['tiki.lib.quantify'] = new \QuantifyLib();
    }

    /**
     * Gets the 'tiki.lib.queue' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \QueueLib A QueueLib instance
     */
    protected function getTiki_Lib_QueueService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/queuelib.php';

        return $this->services['tiki.lib.queue'] = new \QueueLib();
    }

    /**
     * Gets the 'tiki.lib.quiz' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \QuizLib A QuizLib instance
     */
    protected function getTiki_Lib_QuizService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/quizzes/quizlib.php';

        return $this->services['tiki.lib.quiz'] = new \QuizLib();
    }

    /**
     * Gets the 'tiki.lib.rating' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RatingLib A RatingLib instance
     */
    protected function getTiki_Lib_RatingService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/rating/ratinglib.php';

        return $this->services['tiki.lib.rating'] = new \RatingLib();
    }

    /**
     * Gets the 'tiki.lib.ratingconfig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RatingConfigLib A RatingConfigLib instance
     */
    protected function getTiki_Lib_RatingconfigService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/rating/configlib.php';

        return $this->services['tiki.lib.ratingconfig'] = new \RatingConfigLib();
    }

    /**
     * Gets the 'tiki.lib.recommendationcontentbatch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Recommendation\BatchProcessor A Tiki\Recommendation\BatchProcessor instance
     */
    protected function getTiki_Lib_RecommendationcontentbatchService()
    {
        return $this->services['tiki.lib.recommendationcontentbatch'] = new \Tiki\Recommendation\BatchProcessor(${($_ = isset($this->services['tiki.recommendation.activity.store']) ? $this->services['tiki.recommendation.activity.store'] : $this->get('tiki.recommendation.activity.store')) && false ?: '_'}, ${($_ = isset($this->services['tiki.recommendation.content.set']) ? $this->services['tiki.recommendation.content.set'] : $this->get('tiki.recommendation.content.set')) && false ?: '_'});
    }

    /**
     * Gets the 'tiki.lib.references' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ReferencesLib A ReferencesLib instance
     */
    protected function getTiki_Lib_ReferencesService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/references/referenceslib.php';

        return $this->services['tiki.lib.references'] = new \ReferencesLib();
    }

    /**
     * Gets the 'tiki.lib.registration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RegistrationLib A RegistrationLib instance
     */
    protected function getTiki_Lib_RegistrationService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/registration/registrationlib.php';

        return $this->services['tiki.lib.registration'] = new \RegistrationLib();
    }

    /**
     * Gets the 'tiki.lib.relation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RelationLib A RelationLib instance
     */
    protected function getTiki_Lib_RelationService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/attributes/relationlib.php';

        return $this->services['tiki.lib.relation'] = new \RelationLib();
    }

    /**
     * Gets the 'tiki.lib.rss' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \RSSLib A RSSLib instance
     */
    protected function getTiki_Lib_RssService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/rss/rsslib.php';

        return $this->services['tiki.lib.rss'] = new \RSSLib();
    }

    /**
     * Gets the 'tiki.lib.scheduler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SchedulersLib A SchedulersLib instance
     */
    protected function getTiki_Lib_SchedulerService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/schedulerslib.php';

        return $this->services['tiki.lib.scheduler'] = new \SchedulersLib();
    }

    /**
     * Gets the 'tiki.lib.score' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ScoreLib A ScoreLib instance
     */
    protected function getTiki_Lib_ScoreService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/score/scorelib.php';

        return $this->services['tiki.lib.score'] = new \ScoreLib();
    }

    /**
     * Gets the 'tiki.lib.scorm' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ScormLib A ScormLib instance
     */
    protected function getTiki_Lib_ScormService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/filegals/scormlib.php';

        return $this->services['tiki.lib.scorm'] = new \ScormLib();
    }

    /**
     * Gets the 'tiki.lib.searchstats' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SearchStatsLib A SearchStatsLib instance
     */
    protected function getTiki_Lib_SearchstatsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/search/searchstatslib.php';

        return $this->services['tiki.lib.searchstats'] = new \SearchStatsLib();
    }

    /**
     * Gets the 'tiki.lib.semantic' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SemanticLib A SemanticLib instance
     */
    protected function getTiki_Lib_SemanticService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wiki/semanticlib.php';

        return $this->services['tiki.lib.semantic'] = new \SemanticLib();
    }

    /**
     * Gets the 'tiki.lib.service' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ServiceLib A ServiceLib instance
     */
    protected function getTiki_Lib_ServiceService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/servicelib.php';

        return $this->services['tiki.lib.service'] = new \ServiceLib();
    }

    /**
     * Gets the 'tiki.lib.sheet' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SheetLib A SheetLib instance
     */
    protected function getTiki_Lib_SheetService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/sheet/sheetlib.php';

        return $this->services['tiki.lib.sheet'] = new \SheetLib();
    }

    /**
     * Gets the 'tiki.lib.slugmanager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Wiki\SlugManager A Tiki\Wiki\SlugManager instance
     */
    protected function getTiki_Lib_SlugmanagerService()
    {
        $this->services['tiki.lib.slugmanager'] = $instance = new \Tiki\Wiki\SlugManager();

        $instance->addGenerator(${($_ = isset($this->services['tiki.wiki.slug.dash']) ? $this->services['tiki.wiki.slug.dash'] : $this->get('tiki.wiki.slug.dash')) && false ?: '_'});
        $instance->addGenerator(${($_ = isset($this->services['tiki.wiki.slug.underscore']) ? $this->services['tiki.wiki.slug.underscore'] : $this->get('tiki.wiki.slug.underscore')) && false ?: '_'});
        $instance->addGenerator(${($_ = isset($this->services['tiki.wiki.slug.urlencode']) ? $this->services['tiki.wiki.slug.urlencode'] : $this->get('tiki.wiki.slug.urlencode')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'tiki.lib.smarty' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Smarty_Tiki A Smarty_Tiki instance
     */
    protected function getTiki_Lib_SmartyService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/init/smarty.php';

        return $this->services['tiki.lib.smarty'] = new \Smarty_Tiki();
    }

    /**
     * Gets the 'tiki.lib.social' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \SocialLib A SocialLib instance
     */
    protected function getTiki_Lib_SocialService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/user/sociallib.php';

        return $this->services['tiki.lib.social'] = new \SocialLib();
    }

    /**
     * Gets the 'tiki.lib.stats' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \StatsLib A StatsLib instance
     */
    protected function getTiki_Lib_StatsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/stats/statslib.php';

        return $this->services['tiki.lib.stats'] = new \StatsLib();
    }

    /**
     * Gets the 'tiki.lib.storedsearch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \StoredSearchLib A StoredSearchLib instance
     */
    protected function getTiki_Lib_StoredsearchService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/search/storedsearchlib.php';

        return $this->services['tiki.lib.storedsearch'] = new \StoredSearchLib();
    }

    /**
     * Gets the 'tiki.lib.struct' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \StructLib A StructLib instance
     */
    protected function getTiki_Lib_StructService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/structures/structlib.php';

        return $this->services['tiki.lib.struct'] = new \StructLib();
    }

    /**
     * Gets the 'tiki.lib.symbols' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki_Profile_SymbolLoader A Tiki_Profile_SymbolLoader instance
     */
    protected function getTiki_Lib_SymbolsService()
    {
        return $this->services['tiki.lib.symbols'] = new \Tiki_Profile_SymbolLoader();
    }

    /**
     * Gets the 'tiki.lib.tabular' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tracker\Tabular\Manager A Tracker\Tabular\Manager instance
     */
    protected function getTiki_Lib_TabularService()
    {
        return $this->services['tiki.lib.tabular'] = new \Tracker\Tabular\Manager($this->get('tiki.lib.db'));
    }

    /**
     * Gets the 'tiki.lib.template' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TemplatesLib A TemplatesLib instance
     */
    protected function getTiki_Lib_TemplateService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/templates/templateslib.php';

        return $this->services['tiki.lib.template'] = new \TemplatesLib();
    }

    /**
     * Gets the 'tiki.lib.theme' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ThemeLib A ThemeLib instance
     */
    protected function getTiki_Lib_ThemeService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/theme/themelib.php';

        return $this->services['tiki.lib.theme'] = new \ThemeLib();
    }

    /**
     * Gets the 'tiki.lib.themecontrol' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ThemeControlLib A ThemeControlLib instance
     */
    protected function getTiki_Lib_ThemecontrolService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/theme/themecontrollib.php';

        return $this->services['tiki.lib.themecontrol'] = new \ThemeControlLib();
    }

    /**
     * Gets the 'tiki.lib.tikicalendar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TikiCalendarLib A TikiCalendarLib instance
     */
    protected function getTiki_Lib_TikicalendarService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/calendar/tikicalendarlib.php';

        return $this->services['tiki.lib.tikicalendar'] = new \TikiCalendarLib();
    }

    /**
     * Gets the 'tiki.lib.tikidate' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TikiDate A TikiDate instance
     */
    protected function getTiki_Lib_TikidateService()
    {
        return $this->services['tiki.lib.tikidate'] = new \TikiDate();
    }

    /**
     * Gets the 'tiki.lib.todo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TodoLib A TodoLib instance
     */
    protected function getTiki_Lib_TodoService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/todolib.php';

        return $this->services['tiki.lib.todo'] = new \TodoLib();
    }

    /**
     * Gets the 'tiki.lib.trk' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \TrackerLib A TrackerLib instance
     */
    protected function getTiki_Lib_TrkService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/trackers/trackerlib.php';

        return $this->services['tiki.lib.trk'] = new \TrackerLib();
    }

    /**
     * Gets the 'tiki.lib.unifiedsearch' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \UnifiedSearchLib A UnifiedSearchLib instance
     */
    protected function getTiki_Lib_UnifiedsearchService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/search/searchlib-unified.php';

        return $this->services['tiki.lib.unifiedsearch'] = new \UnifiedSearchLib();
    }

    /**
     * Gets the 'tiki.lib.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \UsersLib A UsersLib instance
     */
    protected function getTiki_Lib_UserService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/userslib.php';

        return $this->services['tiki.lib.user'] = new \UsersLib();
    }

    /**
     * Gets the 'tiki.lib.usermailin' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \UserMailinLib A UserMailinLib instance
     */
    protected function getTiki_Lib_UsermailinService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/mailin/usermailinlib.php';

        return $this->services['tiki.lib.usermailin'] = new \UserMailinLib();
    }

    /**
     * Gets the 'tiki.lib.usermodules' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \UserModulesLib A UserModulesLib instance
     */
    protected function getTiki_Lib_UsermodulesService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/usermodules/usermoduleslib.php';

        return $this->services['tiki.lib.usermodules'] = new \UserModulesLib();
    }

    /**
     * Gets the 'tiki.lib.userprefs' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \UserPrefsLib A UserPrefsLib instance
     */
    protected function getTiki_Lib_UserprefsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/userprefs/userprefslib.php';

        return $this->services['tiki.lib.userprefs'] = new \UserPrefsLib();
    }

    /**
     * Gets the 'tiki.lib.validators' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Validators A Validators instance
     */
    protected function getTiki_Lib_ValidatorsService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/validatorslib.php';

        return $this->services['tiki.lib.validators'] = new \Validators();
    }

    /**
     * Gets the 'tiki.lib.vimeo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \VimeoLib A VimeoLib instance
     */
    protected function getTiki_Lib_VimeoService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/filegals/vimeolib.php';

        return $this->services['tiki.lib.vimeo'] = new \VimeoLib(${($_ = isset($this->services['tiki.lib.oauth']) ? $this->services['tiki.lib.oauth'] : $this->get('tiki.lib.oauth')) && false ?: '_'});
    }

    /**
     * Gets the 'tiki.lib.wiki' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WikiLib A WikiLib instance
     */
    protected function getTiki_Lib_WikiService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wiki/wikilib.php';

        return $this->services['tiki.lib.wiki'] = new \WikiLib();
    }

    /**
     * Gets the 'tiki.lib.wizard' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WizardLib A WizardLib instance
     */
    protected function getTiki_Lib_WizardService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/wizard/wizardlib.php';

        return $this->services['tiki.lib.wizard'] = new \WizardLib();
    }

    /**
     * Gets the 'tiki.lib.wysiwyg' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \WYSIWYGLib A WYSIWYGLib instance
     */
    protected function getTiki_Lib_WysiwygService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/ckeditor_tiki/wysiwyglib.php';

        return $this->services['tiki.lib.wysiwyg'] = new \WYSIWYGLib();
    }

    /**
     * Gets the 'tiki.lib.xmpp' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \XMPPLib A XMPPLib instance
     */
    protected function getTiki_Lib_XmppService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/xmpp/xmpplib.php';

        return $this->services['tiki.lib.xmpp'] = new \XMPPLib();
    }

    /**
     * Gets the 'tiki.lib.zotero' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \ZoteroLib A ZoteroLib instance
     */
    protected function getTiki_Lib_ZoteroService()
    {
        require_once '/home/gamerammo/public_html/wiki/lib/zoterolib.php';

        return $this->services['tiki.lib.zotero'] = new \ZoteroLib();
    }

    /**
     * Gets the 'tiki.mailin.provider.articleput' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\ArticlePutProvider A Tiki\MailIn\Provider\ArticlePutProvider instance
     */
    protected function getTiki_Mailin_Provider_ArticleputService()
    {
        return $this->services['tiki.mailin.provider.articleput'] = new \Tiki\MailIn\Provider\ArticlePutProvider();
    }

    /**
     * Gets the 'tiki.mailin.provider.replyhandler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\ReplyHandlerProvider A Tiki\MailIn\Provider\ReplyHandlerProvider instance
     */
    protected function getTiki_Mailin_Provider_ReplyhandlerService()
    {
        return $this->services['tiki.mailin.provider.replyhandler'] = new \Tiki\MailIn\Provider\ReplyHandlerProvider();
    }

    /**
     * Gets the 'tiki.mailin.provider.wiki' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\WikiMultipleProvider A Tiki\MailIn\Provider\WikiMultipleProvider instance
     */
    protected function getTiki_Mailin_Provider_WikiService()
    {
        return $this->services['tiki.mailin.provider.wiki'] = new \Tiki\MailIn\Provider\WikiMultipleProvider();
    }

    /**
     * Gets the 'tiki.mailin.provider.wikiappend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider A Tiki\MailIn\Provider\BasicWikiProvider instance
     */
    protected function getTiki_Mailin_Provider_WikiappendService()
    {
        return $this->services['tiki.mailin.provider.wikiappend'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-append', 'Append to wiki page', 'Tiki\\MailIn\\Action\\WikiAppend');
    }

    /**
     * Gets the 'tiki.mailin.provider.wikiget' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider A Tiki\MailIn\Provider\BasicWikiProvider instance
     */
    protected function getTiki_Mailin_Provider_WikigetService()
    {
        return $this->services['tiki.mailin.provider.wikiget'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-get', 'Send page to user', 'Tiki\\MailIn\\Action\\WikiPut');
    }

    /**
     * Gets the 'tiki.mailin.provider.wikiprepend' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider A Tiki\MailIn\Provider\BasicWikiProvider instance
     */
    protected function getTiki_Mailin_Provider_WikiprependService()
    {
        return $this->services['tiki.mailin.provider.wikiprepend'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-prepend', 'Prepend to wiki page', 'Tiki\\MailIn\\Action\\WikiPrepend');
    }

    /**
     * Gets the 'tiki.mailin.provider.wikiput' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\BasicWikiProvider A Tiki\MailIn\Provider\BasicWikiProvider instance
     */
    protected function getTiki_Mailin_Provider_WikiputService()
    {
        return $this->services['tiki.mailin.provider.wikiput'] = new \Tiki\MailIn\Provider\BasicWikiProvider('wiki-put', 'Create or update wiki page', 'Tiki\\MailIn\\Action\\WikiPut');
    }

    /**
     * Gets the 'tiki.mailin.providerlist' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\MailIn\Provider\ProviderList A Tiki\MailIn\Provider\ProviderList instance
     */
    protected function getTiki_Mailin_ProviderlistService()
    {
        $this->services['tiki.mailin.providerlist'] = $instance = new \Tiki\MailIn\Provider\ProviderList();

        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiput']) ? $this->services['tiki.mailin.provider.wikiput'] : $this->get('tiki.mailin.provider.wikiput')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiget']) ? $this->services['tiki.mailin.provider.wikiget'] : $this->get('tiki.mailin.provider.wikiget')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiappend']) ? $this->services['tiki.mailin.provider.wikiappend'] : $this->get('tiki.mailin.provider.wikiappend')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wikiprepend']) ? $this->services['tiki.mailin.provider.wikiprepend'] : $this->get('tiki.mailin.provider.wikiprepend')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.wiki']) ? $this->services['tiki.mailin.provider.wiki'] : $this->get('tiki.mailin.provider.wiki')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.replyhandler']) ? $this->services['tiki.mailin.provider.replyhandler'] : $this->get('tiki.mailin.provider.replyhandler')) && false ?: '_'});
        $instance->addProvider(${($_ = isset($this->services['tiki.mailin.provider.articleput']) ? $this->services['tiki.mailin.provider.articleput'] : $this->get('tiki.mailin.provider.articleput')) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the 'tiki.recommendation.activity.store' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Recommendation\Store\ActivityStore A Tiki\Recommendation\Store\ActivityStore instance
     */
    protected function getTiki_Recommendation_Activity_StoreService()
    {
        return $this->services['tiki.recommendation.activity.store'] = new \Tiki\Recommendation\Store\ActivityStore(${($_ = isset($this->services['tiki.lib.unifiedsearch']) ? $this->services['tiki.lib.unifiedsearch'] : $this->get('tiki.lib.unifiedsearch')) && false ?: '_'}, ${($_ = isset($this->services['tiki.lib.relation']) ? $this->services['tiki.lib.relation'] : $this->get('tiki.lib.relation')) && false ?: '_'}, ${($_ = isset($this->services['tiki.lib.events']) ? $this->services['tiki.lib.events'] : $this->get('tiki.lib.events')) && false ?: '_'});
    }

    /**
     * Gets the 'tiki.recommendation.content.set' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Recommendation\EngineSet A Tiki\Recommendation\EngineSet instance
     */
    protected function getTiki_Recommendation_Content_SetService()
    {
        return $this->services['tiki.recommendation.content.set'] = new \Tiki\Recommendation\EngineSet();
    }

    /**
     * Gets the 'tiki.wiki.slug.dash' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Wiki\SlugManager\DashGenerator A Tiki\Wiki\SlugManager\DashGenerator instance
     */
    protected function getTiki_Wiki_Slug_DashService()
    {
        return $this->services['tiki.wiki.slug.dash'] = new \Tiki\Wiki\SlugManager\DashGenerator();
    }

    /**
     * Gets the 'tiki.wiki.slug.underscore' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Wiki\SlugManager\UnderscoreGenerator A Tiki\Wiki\SlugManager\UnderscoreGenerator instance
     */
    protected function getTiki_Wiki_Slug_UnderscoreService()
    {
        return $this->services['tiki.wiki.slug.underscore'] = new \Tiki\Wiki\SlugManager\UnderscoreGenerator();
    }

    /**
     * Gets the 'tiki.wiki.slug.urlencode' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Tiki\Wiki\SlugManager\UrlencodeGenerator A Tiki\Wiki\SlugManager\UrlencodeGenerator instance
     */
    protected function getTiki_Wiki_Slug_UrlencodeService()
    {
        return $this->services['tiki.wiki.slug.urlencode'] = new \Tiki\Wiki\SlugManager\UrlencodeGenerator();
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters) || isset($this->loadedDynamicParameters[$name]);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array();
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/home/gamerammo/public_html/wiki',
            'tiki.version' => '17.1',
        );
    }
}
