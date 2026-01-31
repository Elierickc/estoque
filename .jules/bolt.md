## 2024-05-22 - [Redundant Migrations & View Loads]
**Learning:** Calling `$this->migration->current()` inside a model constructor is a significant performance bottleneck in CodeIgniter/Perfex modules, as it triggers filesystem and DB checks on every instantiation. Additionally, redundant full-page view rendering in controllers wastes both DB and CPU resources and results in malformed HTML.
**Action:** Always move migration logic to module activation hooks and ensure controller methods perform a single data fetch and single view load.
