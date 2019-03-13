.DEFAULT_GOAL := explain
explain:
	### Welcome
	#
	# Makefile for phpunit simple application
	#
	### Targets
	#
	@cat Makefile* | grep -E '^[a-zA-Z_-]+:.*?## .*$$' | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'



# Installation ( I just did for Jenkins pipline otherwise I will get an error while run the make test
# stage in jenkins pipline)
install: ## Install the composer and npm for jenkins pipline
	composer.phar install

# Testing
test: ## Run all php tests
	./vendor/bin/phpunit
