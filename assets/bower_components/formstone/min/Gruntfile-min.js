module.exports=function(s){function e(s,e,r){var i=require("fs"),t=require("path");i.readFile(s,"utf8",function(o,a){for(var l=t.dirname(s),n=/@import "(.+?)(\.less)?";/g,c=!1,d;null!==(d=n.exec(a));){var m=l+"/"+d[1]+".less";if(i.existsSync(m)){var g=i.statSync(m);if(g.mtime>e){c=!0;break}}}r(c)})}var r={"dist/css/grid.css":["src/less/grid.less"],"dist/css/grid.ie.css":["src/less/grid.ie.less"],"dist/css/background.css":["src/less/background.less"],"dist/css/carousel.css":["src/less/carousel.less"],"dist/css/checkbox.css":["src/less/checkbox.less"],"dist/css/dropdown.css":["src/less/dropdown.less"],"dist/css/lightbox.css":["src/less/lightbox.less"],"dist/css/navigation.css":["src/less/navigation.less"],"dist/css/number.css":["src/less/number.less"],"dist/css/pagination.css":["src/less/pagination.less"],"dist/css/range.css":["src/less/range.less"],"dist/css/scrollbar.css":["src/less/scrollbar.less"],"dist/css/tabs.css":["src/less/tabs.less"],"dist/css/tooltip.css":["src/less/tooltip.less"],"dist/css/upload.css":["src/less/upload.less"]};s.initConfig({pkg:s.file.readJSON("package.json"),meta:{banner:'/*! <%= pkg.name %> v<%= pkg.version %> [{{ local_name }}] <%= grunt.template.today("yyyy-mm-dd") %> | <%= pkg.license %> License | <%= pkg.homepage_short %> */\n'},watch:{scripts:{files:["src/**/*.js"],tasks:["newer:jshint:library","newer:uglify:library"]},styles:{files:["src/**/*.less"],tasks:["newer:less:library","newer:autoprefixer"]},demoscripts:{files:["demo/js/src/*.js"],tasks:["newer:jshint:demo","newer:uglify:demo"]},demostyles:{files:["demo/css/src/*.less"],tasks:["newer:less:demo","newer:autoprefixer","newer:stripmq:target"]},demo:{files:["demo/pages/**/*.md","demo/templates/**/*.html"],tasks:["zetzer"]},images:{files:["demo/images/src/**/*.{png,jpg,jpeg,gif,svg}"],tasks:["newer:imagemin:target","newer:svgmin:target"]},config:{files:["Gruntfile.js"],options:{reload:!0}}},newer:{options:{override:function(s,r){"less"===s.task?e(s.path,s.time,r):r(!1)}}},jshint:{options:{ignores:"<%= pkg.site.js_ignores %>",globals:{jQuery:!0,$:!0,Formstone:!0,console:!0},browser:!0,curly:!0,eqeqeq:!0,forin:!0,freeze:!0,immed:!0,latedef:!0,newcap:!0,noarg:!0,nonew:!0,smarttabs:!0,sub:!0,undef:!0,validthis:!0},library:"src/js/*.js",demo:"demo/js/src/**/*.js"},uglify:{options:{report:"min"},library:{files:[{expand:!0,cwd:"src/",src:"**/*.js",dest:"dist/"}]},demo:{options:{preserveComments:"some"},files:"<%= pkg.site.js %>"}},copy:{library:{files:[{expand:!0,cwd:"src/",src:"**/*.js",dest:"dist/"}]}},concat:{demo:{files:"<%= pkg.site.js %>"}},less:{options:{cleancss:!1,modifyVars:"<%= pkg.site.vars %>",plugins:[]},library:{files:r},demo:{files:"<%= pkg.site.css %>"}},autoprefixer:{options:{browsers:["> 1%","last 5 versions","Firefox ESR","Opera 12.1","IE 8","IE 9"]},library:{src:"dist/**/*.css"},demo:{src:"demo/css/*.css"}},usebanner:{options:{position:"top",process:function(e){var r=e.split("/"),i=r[r.length-1];return s.config.get("meta").banner.replace("{{ local_name }}",i)}},library:{files:{src:"dist/**/*"}},demo:{files:{src:["demo/css/*","demo/js/*"]}}},sync:{all:{options:{sync:["name","version","description","author","license","homepage","dependencies"]}}},zetzer:{main:{options:{templates:"demo/templates/",partials:"demo/templates/partials/",env:{title:"Formstone",version:"<%= pkg.version %>"}},files:[{expand:!0,src:"demo/pages/*.md",dest:"demo/site/",ext:".html",flatten:!0},{expand:!0,src:"demo/pages/components/*.md",dest:"demo/site/components/",ext:".html",flatten:!0}]}},stripmq:{options:{width:1024,type:"screen"},target:{files:{"demo/css/site-ie8.css":["demo/css/site-ie8.css"]}}},modernizr:{target:{devFile:"demo/bower/modernizr/modernizr.js",outputFile:"demo/js/modernizr.js",extra:{shiv:!1,printshiv:!1,load:!0,mq:!1,cssclasses:!0},files:{src:["demo/js/*.js","demo/css/*.css"]}}},imagemin:{target:{files:[{expand:!0,cwd:"demo/images/src",src:"**/*.{png,jpg,jpeg,gif}",dest:"demo/images"}]}},svgmin:{options:{plugins:[{removeViewBox:!0}]},target:{files:[{expand:!0,cwd:"demo/images/src",src:"**/*.svg",dest:"demo/images"}]}}}),require("load-grunt-tasks")(s),s.loadTasks("tasks"),s.registerTask("default",["js","css","library","demoClean"]),s.registerTask("dev",["js","css","library"]),s.registerTask("js",["jshint:library","uglify:library"]),s.registerTask("css",["less:library","autoprefixer:library"]),s.registerTask("img",["imagemin","svgmin"]),s.registerTask("library",["usebanner:library","sync","buildLicense","buildDocs"]),s.registerTask("demoClean",["zetzer","jshint:demo","uglify:demo","less:demo","autoprefixer:demo","usebanner:demo","modernizr","stripmq","img"]),s.registerTask("demo",["buildDocs","demoClean"])};