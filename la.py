# Import afanasy python module ( must be in PYTHONPATH)

# Create a job
job = af.Job("hwhdwkedhwek")

# Set maximum tasks that can be executed simultaneously
job.setMaxRunningTasks( 5)

# Create a block with provided name and service type
block = af.Block('blendersito', 'blender')

# Set block tasks working directory
block.setWorkingDirectory('/opt/cgru/examples/blender')

# Set block tasks command
block.setCommand('blender -b \"/opt/cgru/examples/blender/scene.blend\" -o \"/home/master/Desktop/imgg\" -s @#@ -e @#@ -j 1 -a')

# Set block tasks preview command arguments
block.setFiles(['/home/master/Desktop/imgg'])

# Set block to numeric type, providing first, last frame and frames per host
block.setNumeric( 1, 5, 1)

# Add block to the job
job.blocks.append( block)

# Send job to Afanasy server
job.send()


