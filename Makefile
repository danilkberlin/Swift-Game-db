GREEN := $(shell tput -Txterm setaf 2)
WHITE := $(shell tput -Txterm setaf 7)
YELLOW := $(shell tput -Txterm setaf 3)
RESET := $(shell tput -Txterm sgr0)
PRINT_HELP = \
	%help; \
	while(<>) { push @{$$help{$$2 // 'options'}}, [$$1, $$3] if /^([a-zA-Z\-]+)\s*:.*\#\#(?:@([a-zA-Z\-]+))?\s(.*)$$/ }; \
	print "usage: make [target]\n\n"; \
	for (sort keys %help) { \
	print "${WHITE}$$_:${RESET}\n"; \
	for (@{$$help{$$_}}) { \
	$$sep = " " x (32 - length $$_->[0]); \
	print "  ${YELLOW}$$_->[0]${RESET}$$sep${GREEN}$$_->[1]${RESET}\n"; \
	}; \
	print "\n"; }

.PHONY: help
help:
	@perl -e '$(PRINT_HELP)' $(MAKEFILE_LIST)

.PHONY: setup
setup: ##@general Build and start all containers
	@docker-compose up --build

.PHONY: start
start: ##@general Start all containers
	@docker-compose start

.PHONY: stop
stop: ##@general Stop all containers
	@docker-compose stop

.PHONY: cli-php
cli-php: ##@python Open interactive shell for Python container
	@docker-compose exec -ti php bash

.PHONY: cli-db
cli-db: ##@python Open interactive shell for Python container
	@docker-compose exec -ti databank bash

.PHONY: logs
logs: ##@python Show Python container logs
	@docker-compose logs -f python