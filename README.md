# CPS Flooring Specialists

WordPress site for www.cpsflooringspecialists.co.uk, run locally with DDEV.

## Structure

```
.ddev/        DDEV config (PHP 8.4, MariaDB 11.4, Apache — matches production)
db/           SQL dumps (outside the web root, git-ignored)
_archive/     Original site backup zip (git-ignored)
public/       WordPress docroot — this is what lives on the server
  wp-content/themes/cps-flooring/   the custom theme (the only code tracked in git)
```

`public/wp-config.php` is shared by both environments: when running under DDEV
(`IS_DDEV_PROJECT=true`) it loads `wp-config-ddev.php` for local DB/URLs/debug,
otherwise it uses the production credentials.

## Local setup

```bash
ddev start
ddev import-db --file=db/cps_wp_db.sql
ddev wp search-replace 'https://www.cpsflooringspecialists.co.uk' 'https://cpsflooring.ddev.site' --all-tables --precise
ddev launch
```

Local URL: https://cpsflooring.ddev.site — admin at `/wp-admin` (same logins as live).

## Handy commands

| Task | Command |
| --- | --- |
| Snapshot DB before risky changes | `ddev snapshot` / `ddev snapshot restore --latest` |
| Export local DB | `ddev export-db --file=db/local-$(date +%F).sql.gz` |
| Open DB GUI | `ddev phpmyadmin` (or `ddev tableplus`) |
| View sent emails | `ddev mailpit` |
| WP-CLI | `ddev wp plugin list` |
| Stop | `ddev stop` |

## Refreshing from live

1. Export the DB from cPanel/phpMyAdmin into `db/`.
2. `ddev import-db --file=db/<file>.sql` then rerun the search-replace above.
3. Pull fresh `wp-content/uploads` if needed (e.g. via SFTP/rsync).

## Deploying

Theme changes: upload `public/wp-content/themes/cps-flooring/` to the server.
Never push the local DB to live — it contains `.ddev.site` URLs.
