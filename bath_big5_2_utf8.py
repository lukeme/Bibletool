import glob

def big2utf8(filename):
	file = open(filename)
	line = file.readline()
	tmp = '';
	while line:
	   line = line[:-1]
	   line = unicode(line, "utf-8")
	   output = [table.get(char, char) for char in line]
	   tmp += "".join(output).encode("utf-8")+"\n"
	   line = file.readline()
	file.close()
	fw = open('./new/'+filename,'w');
	fw.write(tmp);
	fw.close();

table = {}
file = open("utftable.txt")
line = file.readline()
while line:
   line = line.strip()
   line = unicode(line, "utf-8")
   assert len(line)==3 and line[1]=="="
   table[line[2]] = line[0]
   line = file.readline()
file.close()

files = glob.glob('*.tmpl')
for file in files:
	big2utf8(file)
	print file
