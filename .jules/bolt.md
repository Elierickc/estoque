## 2024-05-23 - Migration bottleneck in model constructors
**Learning:** Calling `$this->migration->current()` inside model constructors triggers redundant database and filesystem checks on every instantiation, significantly slowing down the application as models are often loaded multiple times per request.
**Action:** Remove migration calls from constructors and move them to activation hooks or dedicated maintenance methods.

## 2024-05-23 - Redundant view loading in controllers
**Learning:** Loading multiple full-page views (with headers/footers) in a single controller method not only wastes CPU and memory but also results in broken HTML. Redundant database calls for the same data across these views compound the performance hit.
**Action:** Refactor controllers to load a single main view and fetch data only once. Use separate methods for different reports/views.
