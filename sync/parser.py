
try:
    import cElementTree as ET
except ImportError:
  try:
    # Python 2.5 need to import a different module
    import xml.etree.cElementTree as ET
  except ImportError:
    exit_err("Failed to import cElementTree from any known place")      

def find_in_tree(tree, node):
    found = tree.find(node)
    if found == None:
        print "No %s in file" % node
        found = []
    return found  

# Parse a xml file (specify the path)
def_file = "xml_file_name.xml"
try:
    dom = ET.parse(open(def_file, "r"))
    root = dom.getroot()
except:
    exit_err("Unable to open and parse input definition file: " + def_file)

# Parse to find the child nodes list of node 'myNode'
fwdefs = find_in_tree(root,"myNode")