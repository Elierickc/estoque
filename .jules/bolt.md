## 2025-01-24 - Redundant Migration Checks in Model Constructors
**Learning:** Calling `$this->migration->current()` inside a model's `__construct()` method is a significant performance bottleneck in CodeIgniter/Perfex modules. It triggers filesystem scans and database checks on every request where the model is loaded, even if the database is up to date.
**Action:** Always move migration logic to a one-time activation hook or a dedicated setup controller, and remove it from hot paths like model constructors.

## 2025-01-24 - Identifying CodeIgniter View Redundancy
**Learning:** Sequential calls to `$this->load->view()` in CodeIgniter append content to the output buffer. While loading two full HTML documents in one request is often a structural bug, removing one might lead to functional regression if the views are intended to be stacked. However, redundant data fetching (N+1-like behavior at the controller level) can be safely optimized by fetching data once and passing it to all views.
**Action:** Optimize data fetching first; only remove view calls if they are confirmed duplicates and not intended for appending.
