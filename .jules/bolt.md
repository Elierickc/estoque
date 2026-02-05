## 2025-05-15 - Redundant Migration Checks in Model Constructor
**Learning:** Calling `$this->migration->current()` inside a model's `__construct` method is a major performance anti-pattern in CodeIgniter/Perfex CRM. It forces a filesystem check and database migration status check on every single request that loads the model, even when the schema hasn't changed.
**Action:** Always move migration logic to dedicated activation or update hooks. Ensure model constructors only handle essential property initialization.

## 2025-05-15 - Structural Syntax Errors in Legacy Code
**Learning:** This codebase frequently contains structural syntax errors like premature class closing braces `}`. This not only breaks functionality but can also lead to misleading performance profiles if the code is not being executed as expected.
**Action:** Always verify class structure with `php -l` and ensure all intended methods are actually within the class scope before optimizing.
