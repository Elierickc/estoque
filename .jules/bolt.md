# Bolt's Performance Journal

## 2025-05-14 - [Migration checks in Model Constructor]
**Learning:** Calling `$this->migration->current()` inside a model constructor is a significant performance bottleneck as it triggers database and filesystem checks on every instantiation. In Perfex CRM modules, migrations should be handled during activation.

**Action:** Always move migration checks out of model constructors in this codebase.

## 2025-05-14 - [Redundant view loading in Controllers]
**Learning:** Loading multiple full-page views sequentially in a controller method causes redundant database calls and malformed HTML output (double <html>/<body> tags), wasting both DB and CPU resources.

**Action:** Ensure each controller method loads exactly one full-page view and fetches data only once.
