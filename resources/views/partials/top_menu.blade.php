
<style>

    #google_translate_element select{
    background: transparent ;
    color:#000;
    border: none;
    border-radius:3px;
    padding:6px 8px
    }

    #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
    .goog-text-highlight { background: none !important; box-shadow: none !important;}
    #google_translate_element select{
    background-color:transparent;
    color:#fff;
    border: none;
    border-radius:3px;
    padding:6px 8px
    }
    #google_translate_element select option{
    color:#000;
    }
    .goog-logo-link{
        display:none !important;
    }
    .goog-te-gadget{
    color:transparent!important;

    }

    .goog-te-banner-frame{
    display:none !important;


    }
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
        }
    body {
        top: 0px !important;
        }
    #goog-gt-tt, .goog-te-balloon-frame{display: none !important;}
    .goog-text-highlight { background: none !important; box-shadow: none !important;}
    .VIpgJd-yAWNEb-VIpgJd-fmcmS-sn54Q {
        background: none !important; box-shadow: none !important;
    }
    .VIpgJd-ZVi9od-l4eHX-hSRGPd {
        display: none !important;
        }
    .VIpgJd-ZVi9od-ORHb-OEVmcd {
        display: none !important;
    }
    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf {
        display: none !important;
    }
    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
        display: none !important;
    }

</style>
<div class="navbar navbar-expand-md navbar-dark">
    <div class="mt-2 mr-5">
        <a href="{{ route('dashboard') }}" class="d-inline-block">
        <h4 class="text-bold text-white">{{ Qs::getSystemName() }}</h4>
        </a>
    </div>
  {{--  <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{ asset('global_assets/images/logo_light.png') }}" alt="">
        </a>
    </div>--}}

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
            <li class="nav-item">
                <div id="google_translate_element" class="sidebar-control" style="margin-top: 5px;"></div>
            </li>
        </ul>

			<span class="navbar-text ml-md-3 mr-md-auto"></span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img style="width: 38px; height:38px;" src="{{ Auth::user()->photo }}" class="rounded-circle" alt="photo">
                    <span>{{ Auth::user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{ Qs::userIsStudent() ? route('students.show', Qs::hash(Qs::findStudentRecord(Auth::user()->id)->id)) : route('users.show', Qs::hash(Auth::user()->id)) }}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('my_account') }}" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en',
                includedLanguages:'ar,en,fr',},

                'google_translate_element'
            );
            var $googleDiv = $("#google_translate_element .skiptranslate");
            var $googleDivChild = $("#google_translate_element .skiptranslate div");
            $googleDivChild.next().remove();

            $googleDiv.contents().filter(function(){
                return this.nodeType === 3 && $.trim(this.nodeValue) !== '';
            }).remove();
        }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
