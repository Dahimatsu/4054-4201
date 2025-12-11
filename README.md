
```
init-MVC
├─ .DS_Store
├─ app
│  ├─ config
│  │  ├─ bootstrap.php
│  │  ├─ config.php
│  │  └─ routes.php
│  ├─ controllers
│  │  └─ ApiProductController.php
│  ├─ middlewares
│  │  └─ SecurityHeadersMiddleware.php
│  └─ models
│     └─ Produit.php
├─ composer.json
├─ composer.lock
├─ public
│  ├─ assets
│  │  ├─ css
│  │  │  └─ style.css
│  │  └─ images
│  │     ├─ 1.jpg
│  │     ├─ 2.jpg
│  │     └─ 3.jpg
│  ├─ index.php
│  └─ produit.php
├─ vendor
│  ├─ autoload.php
│  ├─ composer
│  │  ├─ autoload_classmap.php
│  │  ├─ autoload_files.php
│  │  ├─ autoload_namespaces.php
│  │  ├─ autoload_psr4.php
│  │  ├─ autoload_real.php
│  │  ├─ autoload_static.php
│  │  ├─ ClassLoader.php
│  │  ├─ installed.json
│  │  ├─ installed.php
│  │  ├─ InstalledVersions.php
│  │  ├─ LICENSE
│  │  └─ platform_check.php
│  ├─ flightphp
│  │  └─ core
│  │     ├─ .editorconfig
│  │     ├─ composer.json
│  │     ├─ CONTRIBUTING.md
│  │     ├─ flight
│  │     │  ├─ autoload.php
│  │     │  ├─ commands
│  │     │  │  ├─ AiGenerateInstructionsCommand.php
│  │     │  │  ├─ AiInitCommand.php
│  │     │  │  ├─ ControllerCommand.php
│  │     │  │  └─ RouteCommand.php
│  │     │  ├─ core
│  │     │  │  ├─ Dispatcher.php
│  │     │  │  ├─ EventDispatcher.php
│  │     │  │  └─ Loader.php
│  │     │  ├─ database
│  │     │  │  └─ PdoWrapper.php
│  │     │  ├─ Engine.php
│  │     │  ├─ Flight.php
│  │     │  ├─ net
│  │     │  │  ├─ Request.php
│  │     │  │  ├─ Response.php
│  │     │  │  ├─ Route.php
│  │     │  │  ├─ Router.php
│  │     │  │  └─ UploadedFile.php
│  │     │  ├─ template
│  │     │  │  └─ View.php
│  │     │  └─ util
│  │     │     ├─ Collection.php
│  │     │     ├─ Json.php
│  │     │     └─ ReturnTypeWillChange.php
│  │     ├─ index.php
│  │     ├─ LICENSE
│  │     ├─ phpcs.xml.dist
│  │     ├─ phpstan-baseline.neon
│  │     ├─ phpstan.neon
│  │     ├─ phpunit-watcher.yml
│  │     ├─ phpunit.xml
│  │     ├─ README.md
│  │     └─ tests
│  │        ├─ AutoloadTest.php
│  │        ├─ classes
│  │        │  ├─ ClassWithExceptionInConstruct.php
│  │        │  ├─ Container.php
│  │        │  ├─ ContainerDefault.php
│  │        │  ├─ Factory.php
│  │        │  ├─ Hello.php
│  │        │  ├─ TesterClass.php
│  │        │  └─ User.php
│  │        ├─ CollectionTest.php
│  │        ├─ commands
│  │        │  ├─ AiGenerateInstructionsCommandTest.php
│  │        │  ├─ AiInitCommandTest.php
│  │        │  ├─ ControllerCommandTest.php
│  │        │  └─ RouteCommandTest.php
│  │        ├─ DispatcherTest.php
│  │        ├─ DocExamplesTest.php
│  │        ├─ EngineTest.php
│  │        ├─ EventSystemTest.php
│  │        ├─ FilterTest.php
│  │        ├─ FlightAsyncTest.php
│  │        ├─ FlightTest.php
│  │        ├─ groupcompactsyntax
│  │        │  ├─ FlightRouteCompactSyntaxTest.php
│  │        │  ├─ PostsController.php
│  │        │  ├─ TodosController.php
│  │        │  └─ UsersController.php
│  │        ├─ JsonTest.php
│  │        ├─ LoaderTest.php
│  │        ├─ MapTest.php
│  │        ├─ named-arguments
│  │        │  ├─ ExampleClass.php
│  │        │  └─ FlightTest.php
│  │        ├─ PdoWrapperTest.php
│  │        ├─ performance
│  │        │  ├─ index.php
│  │        │  └─ performance_tests.sh
│  │        ├─ phpunit_autoload.php
│  │        ├─ README.md
│  │        ├─ RedirectTest.php
│  │        ├─ RegisterTest.php
│  │        ├─ RenderTest.php
│  │        ├─ RequestTest.php
│  │        ├─ ResponseTest.php
│  │        ├─ RouterTest.php
│  │        ├─ run_all_tests.sh
│  │        ├─ server
│  │        │  ├─ AuthCheck.php
│  │        │  ├─ index.php
│  │        │  ├─ LayoutMiddleware.php
│  │        │  ├─ OverwriteBodyMiddleware.php
│  │        │  ├─ Pascal_Snake_Case.php
│  │        │  ├─ template.phtml
│  │        │  └─ test_file.txt
│  │        ├─ server-v2
│  │        │  ├─ index.php
│  │        │  └─ template.phtml
│  │        ├─ UploadedFileTest.php
│  │        ├─ VariableTest.php
│  │        ├─ views
│  │        │  ├─ hello.php
│  │        │  ├─ input.php
│  │        │  ├─ layouts
│  │        │  │  └─ layout.php
│  │        │  ├─ myComponent.php
│  │        │  └─ world.html
│  │        └─ ViewTest.php
│  └─ tracy
│     └─ tracy
│        ├─ .phpstorm.meta.php
│        ├─ composer.json
│        ├─ eslint.config.js
│        ├─ examples
│        │  ├─ ajax-fetch.php
│        │  ├─ ajax-jquery.php
│        │  ├─ assets
│        │  │  ├─ arrow.png
│        │  │  ├─ E_COMPILE_ERROR.php
│        │  │  └─ style.css
│        │  ├─ barDump.php
│        │  ├─ dump-snapshot.php
│        │  ├─ dump.php
│        │  ├─ exception.php
│        │  ├─ fatal-error.php
│        │  ├─ log
│        │  ├─ notice.php
│        │  ├─ output-debugger.php
│        │  ├─ preloading.php
│        │  ├─ redirect.php
│        │  └─ warning.php
│        ├─ license.md
│        ├─ ncs.php
│        ├─ ncs.xml
│        ├─ package.json
│        ├─ phpstan.neon
│        ├─ readme.md
│        ├─ src
│        │  ├─ Bridges
│        │  │  ├─ Nette
│        │  │  │  ├─ Bridge.php
│        │  │  │  ├─ MailSender.php
│        │  │  │  └─ TracyExtension.php
│        │  │  └─ Psr
│        │  │     ├─ PsrToTracyLoggerAdapter.php
│        │  │     └─ TracyToPsrLoggerAdapter.php
│        │  ├─ Tracy
│        │  │  ├─ assets
│        │  │  │  ├─ helpers.js
│        │  │  │  ├─ reset.css
│        │  │  │  ├─ table-sort.css
│        │  │  │  ├─ table-sort.js
│        │  │  │  ├─ tabs.css
│        │  │  │  ├─ tabs.js
│        │  │  │  ├─ toggle.css
│        │  │  │  └─ toggle.js
│        │  │  ├─ Bar
│        │  │  │  ├─ assets
│        │  │  │  │  ├─ bar.css
│        │  │  │  │  ├─ bar.js
│        │  │  │  │  ├─ bar.phtml
│        │  │  │  │  ├─ loader.phtml
│        │  │  │  │  └─ panels.phtml
│        │  │  │  ├─ Bar.php
│        │  │  │  ├─ DefaultBarPanel.php
│        │  │  │  ├─ IBarPanel.php
│        │  │  │  └─ panels
│        │  │  │     ├─ dumps.panel.phtml
│        │  │  │     ├─ dumps.tab.phtml
│        │  │  │     ├─ info.panel.phtml
│        │  │  │     ├─ info.tab.phtml
│        │  │  │     ├─ warnings.panel.phtml
│        │  │  │     └─ warnings.tab.phtml
│        │  │  ├─ BlueScreen
│        │  │  │  ├─ assets
│        │  │  │  │  ├─ bluescreen.css
│        │  │  │  │  ├─ bluescreen.js
│        │  │  │  │  ├─ content.phtml
│        │  │  │  │  ├─ page.phtml
│        │  │  │  │  ├─ section-cli.phtml
│        │  │  │  │  ├─ section-environment.phtml
│        │  │  │  │  ├─ section-exception-causedBy.phtml
│        │  │  │  │  ├─ section-exception-exception.phtml
│        │  │  │  │  ├─ section-exception.phtml
│        │  │  │  │  ├─ section-header.phtml
│        │  │  │  │  ├─ section-http.phtml
│        │  │  │  │  ├─ section-lastMutedError.phtml
│        │  │  │  │  ├─ section-stack-callStack.phtml
│        │  │  │  │  ├─ section-stack-exception.phtml
│        │  │  │  │  ├─ section-stack-fiber.phtml
│        │  │  │  │  ├─ section-stack-generator.phtml
│        │  │  │  │  └─ section-stack-sourceFile.phtml
│        │  │  │  ├─ BlueScreen.php
│        │  │  │  └─ CodeHighlighter.php
│        │  │  ├─ Debugger
│        │  │  │  ├─ assets
│        │  │  │  │  └─ error.500.phtml
│        │  │  │  ├─ Debugger.php
│        │  │  │  ├─ DeferredContent.php
│        │  │  │  ├─ DevelopmentStrategy.php
│        │  │  │  └─ ProductionStrategy.php
│        │  │  ├─ Dumper
│        │  │  │  ├─ assets
│        │  │  │  │  ├─ dumper-dark.css
│        │  │  │  │  ├─ dumper-light.css
│        │  │  │  │  └─ dumper.js
│        │  │  │  ├─ Describer.php
│        │  │  │  ├─ Dumper.php
│        │  │  │  ├─ Exposer.php
│        │  │  │  ├─ Renderer.php
│        │  │  │  └─ Value.php
│        │  │  ├─ functions.php
│        │  │  ├─ Helpers.php
│        │  │  ├─ Logger
│        │  │  │  ├─ ILogger.php
│        │  │  │  └─ Logger.php
│        │  │  ├─ OutputDebugger
│        │  │  │  └─ OutputDebugger.php
│        │  │  └─ Session
│        │  │     ├─ FileSession.php
│        │  │     ├─ NativeSession.php
│        │  │     └─ SessionStorage.php
│        │  └─ tracy.php
│        ├─ tests
│        │  ├─ .coveralls.yml
│        │  ├─ bootstrap.php
│        │  ├─ Tracy
│        │  │  ├─ Bluescreen.collapsedPaths.phpt
│        │  │  ├─ BlueScreen.getDumper().phpt
│        │  │  ├─ BlueScreen.renderActions().phpt
│        │  │  ├─ BlueScreen.showEnvironment.phpt
│        │  │  ├─ Debugger.Bar.disabled.phpt
│        │  │  ├─ Debugger.Bar.html.phpt
│        │  │  ├─ Debugger.Bar.production.phpt
│        │  │  ├─ Debugger.Bar.text.phpt
│        │  │  ├─ Debugger.barDump().phpt
│        │  │  ├─ Debugger.barDump().showLocation.phpt
│        │  │  ├─ Debugger.customCssFiles.phpt
│        │  │  ├─ Debugger.customJsFiles.phpt
│        │  │  ├─ Debugger.detectDebugMode.phpt
│        │  │  ├─ Debugger.dump().cli.phpt
│        │  │  ├─ Debugger.dump().phpt
│        │  │  ├─ Debugger.enable().error.development.console.phpt
│        │  │  ├─ Debugger.enable().error.development.html.phpt
│        │  │  ├─ Debugger.enable().error.production.console.phpt
│        │  │  ├─ Debugger.enable().error.production.html.phpt
│        │  │  ├─ Debugger.error-in-eval.phpt
│        │  │  ├─ Debugger.error-in-toString.phpt
│        │  │  ├─ Debugger.exception.console.phpt
│        │  │  ├─ Debugger.exception.fiber.html.phpt
│        │  │  ├─ Debugger.exception.generator.html.phpt
│        │  │  ├─ Debugger.exception.html.phpt
│        │  │  ├─ Debugger.exception.in-generator.html.phpt
│        │  │  ├─ Debugger.exception.nonhtml.phpt
│        │  │  ├─ Debugger.exception.production.console.phpt
│        │  │  ├─ Debugger.exception.production.phpt
│        │  │  ├─ Debugger.exceptionHandler.development.console.phpt
│        │  │  ├─ Debugger.exceptionHandler.development.html.phpt
│        │  │  ├─ Debugger.exceptionHandler.production.console.phpt
│        │  │  ├─ Debugger.exceptionHandler.production.html.phpt
│        │  │  ├─ Debugger.E_COMPILE_ERROR.console.phpt
│        │  │  ├─ Debugger.log().error.phpt
│        │  │  ├─ Debugger.log().samefile.phpt
│        │  │  ├─ Debugger.logging.error.phpt
│        │  │  ├─ Debugger.logging.warnings.phpt
│        │  │  ├─ Debugger.logSeverity.E_NOTICE.development.phpt
│        │  │  ├─ Debugger.logSeverity.E_NOTICE.phpt
│        │  │  ├─ Debugger.scream.E_USER_DEPRECATED.phpt
│        │  │  ├─ Debugger.scream.phpt
│        │  │  ├─ Debugger.shut-up.error.phpt
│        │  │  ├─ Debugger.shut-up.warnings.phpt
│        │  │  ├─ Debugger.strict.console.phpt
│        │  │  ├─ Debugger.strict.html.phpt
│        │  │  ├─ Debugger.timer().phpt
│        │  │  ├─ Debugger.warnings.console.phpt
│        │  │  ├─ Debugger.warnings.html.phpt
│        │  │  ├─ Debugger.warnings.production.phpt
│        │  │  ├─ dump().cli.phpt
│        │  │  ├─ dump().html.phpt
│        │  │  ├─ dump().text.phpt
│        │  │  ├─ Dumper.debugInfo.phpt
│        │  │  ├─ Dumper.dump().cli.phpt
│        │  │  ├─ Dumper.dump().html.phpt
│        │  │  ├─ Dumper.dump().text.phpt
│        │  │  ├─ Dumper.exposeObject.phpt
│        │  │  ├─ Dumper.keys.phpt
│        │  │  ├─ Dumper.keysToHide.phpt
│        │  │  ├─ Dumper.nesting-error.phpt
│        │  │  ├─ Dumper.objectExporters.phpt
│        │  │  ├─ Dumper.references74.phpt
│        │  │  ├─ Dumper.scrubber.phpt
│        │  │  ├─ Dumper.sensitiveValue.phpt
│        │  │  ├─ Dumper.toHtml().collapse.phpt
│        │  │  ├─ Dumper.toHtml().depth.phpt
│        │  │  ├─ Dumper.toHtml().key.phpt
│        │  │  ├─ Dumper.toHtml().lazy.auto.phpt
│        │  │  ├─ Dumper.toHtml().lazy.no.phpt
│        │  │  ├─ Dumper.toHtml().lazy.phpt
│        │  │  ├─ Dumper.toHtml().live.phpt
│        │  │  ├─ Dumper.toHtml().locale.phpt
│        │  │  ├─ Dumper.toHtml().location.phpt
│        │  │  ├─ Dumper.toHtml().phpt
│        │  │  ├─ Dumper.toHtml().recursion.phpt
│        │  │  ├─ Dumper.toHtml().references.phpt
│        │  │  ├─ Dumper.toHtml().see.phpt
│        │  │  ├─ Dumper.toHtml().snapshot.phpt
│        │  │  ├─ Dumper.toHtml().specialChars.phpt
│        │  │  ├─ Dumper.toHtml().specials.phpt
│        │  │  ├─ Dumper.toTerminal().phpt
│        │  │  ├─ Dumper.toText().depth.phpt
│        │  │  ├─ Dumper.toText().enumProperty.phpt
│        │  │  ├─ Dumper.toText().enumProperty.PhpToken.phpt
│        │  │  ├─ Dumper.toText().locale.phpt
│        │  │  ├─ Dumper.toText().location.phpt
│        │  │  ├─ Dumper.toText().nohash.phpt
│        │  │  ├─ Dumper.toText().phpt
│        │  │  ├─ Dumper.toText().recursion.phpt
│        │  │  ├─ Dumper.toText().references.phpt
│        │  │  ├─ Dumper.toText().see.phpt
│        │  │  ├─ Dumper.toText().specialChars.phpt
│        │  │  ├─ Dumper.toText().specials.dom.php84.phpt
│        │  │  ├─ Dumper.toText().specials.dom.phpt
│        │  │  ├─ Dumper.toText().specials.ds.phpt
│        │  │  ├─ Dumper.toText().specials.enum.phpt
│        │  │  ├─ Dumper.toText().specials.fiber.phpt
│        │  │  ├─ Dumper.toText().specials.generator.phpt
│        │  │  ├─ Dumper.toText().specials.phpt
│        │  │  ├─ expected
│        │  │  │  ├─ Debugger.barDump().expect
│        │  │  │  ├─ Debugger.error-in-eval.expect
│        │  │  │  ├─ Debugger.exception.fiber.html.expect
│        │  │  │  ├─ Debugger.exception.generator.html.expect
│        │  │  │  ├─ Debugger.exception.html.expect
│        │  │  │  ├─ Debugger.exception.in-generator.html.expect
│        │  │  │  ├─ Debugger.exception.nonhtml.expect
│        │  │  │  ├─ Debugger.scream.expect
│        │  │  │  ├─ Debugger.scream.E_USER_DEPRECATED.expect
│        │  │  │  ├─ Debugger.strict.console.expect
│        │  │  │  └─ Debugger.strict.html.expect
│        │  │  ├─ fixtures
│        │  │  │  ├─ custom.asset
│        │  │  │  ├─ DumpClass.php
│        │  │  │  ├─ E_COMPILE_ERROR.php
│        │  │  │  ├─ E_COMPILE_WARNING.php
│        │  │  │  ├─ FATAL.php
│        │  │  │  └─ guess-class.php
│        │  │  ├─ Helpers.encodeString().phpt
│        │  │  ├─ Helpers.getSuggestion().phpt
│        │  │  ├─ Helpers.guessClassFile().phpt
│        │  │  ├─ Helpers.improveError.phpt
│        │  │  ├─ Helpers.improveException.phpt
│        │  │  ├─ Helpers.improveException.smartobject.phpt
│        │  │  ├─ Helpers.minifyCss.phpt
│        │  │  ├─ Helpers.minifyJs.phpt
│        │  │  ├─ Helpers.truncateString(().phpt
│        │  │  ├─ Logger.extensible.phpt
│        │  │  ├─ Logger.log().errors.phpt
│        │  │  └─ Logger.log().phpt
│        │  └─ Tracy.Bridges
│        │     ├─ PsrToTracyLoggerAdapter.phpt
│        │     ├─ TracyExtension.mailer.phpt
│        │     ├─ TracyExtension.services.phpt
│        │     └─ TracyToPsrLoggerAdapter.phpt
│        └─ tools
│           ├─ create-phar
│           │  └─ create-phar.php
│           └─ open-in-editor
│              ├─ linux
│              │  ├─ install.sh
│              │  └─ open-editor.sh
│              └─ windows
│                 ├─ install.cmd
│                 └─ open-editor.js
└─ views
   └─ accueil.php

```