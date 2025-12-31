# Plan: Update copilot-instructions.md for Decision OS

I'll update the instructions file to document the **Decision OS Dashboard** project specifications while preserving the existing Fabkin template guidance. This transforms the file from a generic template guide to a product-specific development reference.

## Steps

1. **Rename and restructure** — Change header from "Fabkin Admin Dashboard" to "Decision OS Dashboard" and add project identity section with core philosophy

2. **Add Domain Modules section** — Document the 5 core modules (`Life & Discipline`, `Financial Safety`, `Focus System`, `Pomodoro System`, `Weekly Review`) with their KPIs and status rules

3. **Add Status Engine rules** — Document the Green/Yellow/Red logic, the 10 Insight Rules, and Global Lock trigger (≥2 Reds)

4. **Add Database Schema section** — Document tables: `users`, `metrics`, `metric_values`, `pomodoro_sessions`, `insights`, `weekly_reviews`

5. **Add Service Layer conventions** — Document `StatusService`, `InsightService`, `BurnoutService` patterns and the rule that "JS = Timer only, Laravel = all logic"

6. **Preserve Fabkin template section** — Keep existing Blade/asset/routing guidance under a "Template Foundation" subsection

## Further Considerations

1. **MVP Priority Order** — Should I include the 10-phase task breakdown in the instructions, or keep it separate in docs/?

2. **Arabic vs English** — The spec is in Arabic; should the instructions remain English-only for code consistency?

3. **Lock System** — Should I add explicit code patterns for the module locking logic (e.g., middleware approach)?
