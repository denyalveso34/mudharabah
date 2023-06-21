## Development

1. git clone or git pull
2. _(optional)_ docker build -t registry.gitlab.com/project-dinas-pu/fprpu .
3. docker run --env-file env --name fprpu -d -p 8181:8080 -v "$(pwd):/var/www/html" registry.gitlab.com/project-dinas-pu/fprpu
4. _(optional)_ docker push registry.gitlab.com/project-dinas-pu/fprpu
5. _start coding..._
6. docker stop fprpu || true && docker rm fprpu || true

## Container shell _(optional)_

docker exec -it fprpu /bin/sh

## Clean docker

- docker rm -vf $(docker ps -aq)
- docker system prune --volumes --all --force
