https://viblo.asia/telosma/posts/ZDEeLRrwvJb

S1: Resources/View/
S2: Resources/lang/
S3: Middleware/Locale.php: use Lang; use Session;
S4: Add "'localization' => \App\Http\Middleware\Locale::class," in App/Http/Controllers/Kernel.php
S5: App/Http/Controllers/LangController.php
S6: Routes/web.php