.DEFAULT_GOAL := explain
explain:
	### Welcome
	#
	# Makefile for phpunit simple application
	#
	### Targets
	#
	@cat Makefile* | grep -E '^[a-zA-Z_-]+:.*?## .*$$' | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'




# Testing
test: ## Run all php tests
	./vendor/bin/phpunit
