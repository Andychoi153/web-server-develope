import numpy as np
from mpl_toolkits.mplot3d import axes3d
from matplotlib.colors import BoundaryNorm
from matplotlib.ticker import MaxNLocator
import matplotlib.pyplot as plt

f= 'C:\\Users\\Jungdo\\Desktop\\dd\\graphene_3-3-C_200slit_0.2sec_5.1desity'

x = np.loadtxt(f)
i = range(1183)
for j in i :
    k = x[j]
    if j == 0 :
        gz = np.array([k[1:1024]])
    else :
        gz = np.append(gz,[k[1:1024]], axis = 0)
        
fig = plt.figure()
ax = fig.gca(projection='3d')
bx = fig.gca(projection='3d')

for i in range(1183):
    if i ==0 :
        X = np.array([np.linspace(1,1023,1023)])
    else :
        X = np.append(X,[np.linspace(1,1023,1023)],axis=0)


for i in range(1183):
    if i ==0 :
        Y = np.array([np.linspace(1,1,1023)])
    else :
        Y = np.append(Y,[np.linspace(i+1,i+1,1023)],axis=0)

x = X[300:1100]
y = Y[300:1100]
z = gz[300:1100]
ax.plot_surface(x, y, z, rstride=50, cstride=50, alpha=0.2)

levels = MaxNLocator(nbins=15).tick_values(230,300)


# pick the desired colormap, sensible levels, and define a normalization
# instance which takes data values and translates those into levels.
cmap = plt.get_cmap('PiYG')
norm = BoundaryNorm(levels, ncolors=cmap.N, clip=True)

plt.subplot(2, 1, 1)
im = plt.pcolormesh(x, y, z, cmap=cmap, norm=norm)
plt.colorbar()
# set the limits of the plot to the limits of the data
plt.axis([x.min(), x.max(), y.min(), y.max()])
plt.title('pcolormesh with levels')


plt.savefig('C:\\Users\\Jungdo\\Desktop\\dd\\foo.png')