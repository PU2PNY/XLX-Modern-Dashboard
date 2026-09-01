# XLX Modern Dashboard

Standalone public web dashboard for XLX/xlxd reflectors.

This repository contains only the dashboard and its dashboard-specific installer. It was restored from a preserved production-derived dashboard snapshot and sanitized so reflector-specific operational data is not distributed.

## Included

- Live transmissions and recent activity
- Connected stations and module views
- XLX reflector directory
- Activity ranking
- Amateur-radio news and propagation/weather widgets
- Accessibility controls
- PWA/offline assets
- ANATEL practice/simulation page contained in the preserved dashboard snapshot
- Portuguese (Brazil), English, Spanish, French, German and Italian dashboard translations
- Generic per-reflector installer and placeholder renderer

## Configuration

The repository ships with generic source placeholders and `config/site.example.php`. A real installation creates `config/site.php` locally; that file is ignored by Git and must not be committed.

```bash
sudo bash install/install-dashboard.sh
```

To preselect a dashboard language:

```bash
sudo bash install/install-dashboard.sh --lang=en
```

## Public-release boundary

This repository intentionally excludes private server configuration, credentials, databases, logs, sessions, backups, TLS private material, private administration/control pages, xlxd binaries/source, full-server installation components, server-side audio conversion components, and production APRS/D-PRS credentials or operator data.

APRS/D-PRS and certificate services may require their own separately installed backend/module when used by a deployment.
