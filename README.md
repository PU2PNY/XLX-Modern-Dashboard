# XLX Modern Dashboard

Standalone public web dashboard for XLX/xlxd reflectors.

This repository contains only the dashboard and its dashboard-specific installer. It was restored from a preserved production-derived dashboard snapshot and sanitized so reflector-specific operational data is not distributed.

## Production parity

The `main` dashboard is synchronized with the production-proven XLX026 Ao Vivo implementation as of 2026-09-15. Reflector identity, domain, YSF room and logo remain configurable so other XLX installations do not inherit XLX026-specific operational identity.

Ao Vivo parity includes the current multi-TX layout, QRZ public photo handling, 24-hour activity table, 7/30-day on-demand history, RadioID repeater enrichment, browser-load scaling, accessibility controls, mobile layout and passive audio VU display. The VU UI consumes optional runtime telemetry when a compatible passive audio provider is installed; the audio decoder/provider itself is intentionally outside this public dashboard repository.

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
