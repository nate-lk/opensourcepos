# DA01 Docker Target

This compose file runs Open Source Point of Sale as a stable target application
for DA01-generated tests.

## Start OSPOS

From this directory:

```powershell
docker compose -f docker-compose.da01.yml up -d
```

The app is available from the host browser at:

```text
http://localhost:8088
```

Default login:

```text
Username: admin
Password: pointofsale
```

## Connect DA01 To This Target

When DA01, Resource, or test-runtime workers run inside Docker, use this runtime
base URL:

```text
http://host.docker.internal:8088
```

Use `/` as the health path. The compose file allows the host headers DA01 will
send from both the host browser and Docker worker containers.

## Stop Or Reset

Stop the target without deleting data:

```powershell
docker compose -f docker-compose.da01.yml down
```

Reset the target database, uploads, and logs:

```powershell
docker compose -f docker-compose.da01.yml down -v
```

This setup uses the upstream `jekkos/opensourcepos:master` image so the target
starts without requiring a local Composer/NPM build. Use the local repository
source in this folder for DA01 code analysis and generated test context.
