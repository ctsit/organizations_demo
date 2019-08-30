# Organization's REDCap Module

The module is a demonstration of REDCap Entity, a library the simplifies REDCap module development by managing novel data types. This module creates a organization data type


## Prerequisites
- REDCap >= 8.7.0
- redcap_entity >= 2.2.0

- Install and configure [REDCap Entity](https://github.com/ctsit/redcap_entity) according to its instructions.
- Clone this repo into to `<redcap-root>/modules/organizations_<version_number>`.
- Go to **Control Center > Manage External Modules** and enable _Organizations_.


## Using this project


### How to load some test data

From the VM console, run this command:

```
echo "load data local infile 'redcap_organizations_data.csv' into table redcap_entity_org FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"' IGNORE 1 ROWS" | mysql
```
