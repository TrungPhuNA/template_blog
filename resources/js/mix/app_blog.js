import Search from "../components/search";
import './../library/jquery.app';
import Article from "../components/article";
import Auth from "./../components/_inc_auth";
// import "./../components/prism"

$(function () {
	Search.init()
	Article.init()
	Auth.init()
})