# Build
```
# Export objects
oc get bc/ecas is/ecas --export -o yaml > build.yaml

# As a reference check the output of the deprecated `oc export`
# oc export bc/ecas is/ecas -o yaml > build2.yaml

# Manually update to remove cluster/namespace references

# Process template
# For creating new objects
oc process -f build.yaml --param-file=build.vars --param-file=build.local.vars | oc create -f -

# FOr Updating existing ones
oc process -f build.yaml --param-file=build.vars --param-file=build.local.vars | oc replace -f -

# note: Check `oc apply`
oc process -f build.yaml --param-file=build.vars --param-file=build.local.vars | oc apply -f

```

# Deployment
```
# Export objects
oc get dc/ecas is/ecas --export -o yaml > deployment.yaml

# Create new deployment template??
oc process -f deployment.yaml | oc create -f -
```

# Pipeline
TODO: Add Jenkins file
TODO: Modify the ecas template.  Currently it's set to build automatically, but we want to orchestrate everything from the pipeline.

One of my last theories to test is that the push to the Dev branch isn't triggering the webhook call