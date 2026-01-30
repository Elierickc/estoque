## 2025-01-30 - [Performance Anti-pattern: Redundant Operations]
**Learning:** Found two major performance anti-patterns:
1. Running migrations in the model constructor: `$this->migration->current()` in every model load causes unnecessary DB and FS overhead.
2. Redundant database calls and multiple full-page view rendering in a single controller method.

**Action:** Always check for `migration->current()` in constructors and look for redundant `load->view` or DB calls in controllers.
