#!/usr/bin/env python
# Import afanasy python module ( must be in PYTHONPATH)
import af, sys, json

# Load the data that PHP sent us
try:
    data = json.loads(sys.argv[1])
except:
    print "ERROR"
    sys.exit(1)


# Generate some data to send to PHP
result = {'status': 'Yes!'}
#folder = "/var/www/owncloud/" + data["folder"]

# Create a job
job = af.Job(data["escena"])

job.setUserName(data["usuario"])
# Set maximum tasks that can be executed simultaneously
job.setMaxRunningTasks( 5)

# Create a block with provided name and service type
block = af.Block('blendersito', 'blender')

# Set block tasks working directory
block.setWorkingDirectory('/opt/cgru/examples/blender')

# Set block tasks command
block.setCommand('blender -b \"/opt/cgru/examples/blender/scene.blend\" -o \"/var/www/owncloud/Nube_Multimedia/admin/ii\" -s @#@ -e @#@ -j 1 -a')

# Set block tasks preview command arguments
block.setFiles(["/var/www/owncloud/Nube_Multimedia/admin/ii"])

# Set block to numeric type, providing first, last frame and frames per host
block.setNumeric( data["frame_ini"], data["frame_fin"], 1)

# Add block to the job
job.blocks.append( block)

# Send job to Afanasy server
job.send()

#Imprimir un mensaje
print 'Trabajo renderizando'

# Send it to stdout (to PHP)
print json.dumps(data)
