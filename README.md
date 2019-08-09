# API Platform Bug Report
* Relates to: https://github.com/api-platform/core/issues/2967

***Problem:***

Operation level serialization groups disregarded in parent classes when resource level serialization is defined

## Setup project

```bash
# Download repo
git clone https://github.com/tec4/api-platform-bug.git

# Move into project
cd api-platform-bug

# Install dependencies
composer install

# Start local server on localhost 
symfony server:start -d

# Create database and update schema
bin/console doctrine:database:create && bin/console doctrine:schema:update --force

```

## Reproducing Error

* Navigate to http://localhost:8000/api/docs
* Notice that the Example-create model, at the bottom of the docs page, does not include any properties that have only the "create" serialization group defined. It should have:
    * ```$createOnlyProperty``` from ```src/Entity/Example.php```
    * ```$traitPropertyFail``` from ```src/Entity/BaseTrait.php```
    * ```$basePropertyFail``` from ```src/Entity/Base.php```
* If I remove the following lines from the Example entity, they all show up as I would expect:
    * ```normalizationContext={"groups"={"read"}},```
    * ```denormalizationContext={"groups"={"write"}},```
