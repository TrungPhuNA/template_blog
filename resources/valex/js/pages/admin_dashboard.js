import '../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js'
import * as moment from 'moment';
import '../../assets/plugins/rating/jquery.rating-stars.js'
import '../../assets/plugins/rating/jquery.barrating.js'
import '../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'
import '../../assets/plugins/jquery-sparkline/jquery.sparkline.min.js'
import '../../assets/plugins/sidebar/sidebar.js'
import '../../assets/plugins/sidebar/sidebar-custom.js'
import '../../assets/plugins/sumoselect/jquery.sumoselect.js'
import '../../assets/plugins/select2/js/select2.min'

import '../../assets/js/sticky.js'
import '../../assets/js/custom.js'
import '../../assets/plugins/side-menu/sidemenu.js'
import '../../assets/switcher/js/switcher.js'
import '../../assets/js/advanced-form-elements.js'
import InitJs from "../components/_inc_init";
import FilepondUpload from '../components/_init_filepond.js'
import SEO from '../components/_inc_seo.js'
import Messages from "../../../js/components/_inc_run_message";
import Delete from "../components/_inc_delete"
import Course from "../components/_inc_course";
import PriceJs from "../components/_inc_price";
import ConfigLink from "../components/_inc_links";
import Transaction from "../components/_inc_transaction";
import initUser from "../components/_inc_user";
import Article from "../components/_inc_article";
import Charcounter from "../components/_inc_count_char";
$(function (){
    InitJs.init()
    FilepondUpload.inti()
    SEO.init()
    PriceJs.init()
    Article.init()
    initUser.init()
    Course.init()
    Delete.init()
    Messages.init()
    ConfigLink.init()
    Transaction.init()
    Charcounter.init()
})
