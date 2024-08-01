.PHONY: docker*

DOCKER_COMPOSE_CMD:=docker-compose

docker/build: docker/down
	$(DOCKER_COMPOSE_CMD) build --no-cache

docker/up:
	$(DOCKER_COMPOSE_CMD) up

docker/down:
	$(DOCKER_COMPOSE_CMD) down

docker/%/ssh:
	$(DOCKER_COMPOSE_CMD) exec ${@:docker/%/ssh=%} sh
