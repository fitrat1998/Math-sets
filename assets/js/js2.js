
function	rnd	(n1,n2,kmax,stxt)	//Генератор	последовательности случайных
{ s=" ";	// натуральных чисел от n1 до n2 kmax штук
if ((n2-n1)<kmax)kmax=n2-n1; n2-=n1
knum=0; do
{ s0=Math.round(Math.random() *n2) +n1; s1=" "+s0+" ";
if(s.indexOf(s1)==-1) {s+=s0+" ";knum++} } while(knum<kmax) eval("document.all.txt"+stxt+".value=s")
f2(); fsort(stxt);}
function f2() //Очищаем поля результата и индикатор последней операции
{document.all.txt3.value=''; document.all.txt4.value='';}

function fsort(n) //Сортировка числовых множеств по возрастанию
{s=eval("document.all.txt"+n+".value"); s=s.split(" ");
ns=s.length;
for (i=0; i<ns; i++) s[i]=1*s[i];
// Сортировка простым обменов
for (i=0; i<ns; i++) for (j=0; j<ns; j++) if(s[j]>s[j+1])
{p=s[j];
s[j]=s[j+1];
s[j+1]=p;}
s0="";
for (i=0; i<ns; i++) if (s[i]>0) s0+=s[i]+" "; eval("document.all.txt"+n+".value=s0"); }
function g(k) //Сведение общей задачи к более элементарным
{var ind=new Array();
ind[0]='Объединить';ind[1]='Разность А и В';ind[2]='Разность В и А'; ind[3]='Пересечение'; ind[4]='Симметричная разность';
if (k==0) document.all.txt3.value=f1(0)+f1(1)+f1(2); if (k==1) document.all.txt3.value=f1(1);
if (k==2) document.all.txt3.value=f1(2); if (k==3) document.all.txt3.value=f1(0);
if (k==4) document.all.txt3.value=f1(1)+f1(2); document.all.txt4.value=ind[k];
fsort(3) ;}

function f1(n) // Поиск пересечения или разности двух множеств
{ ma=document.all.txt1.value; mb=document.all.txt2.value; if (n==2)
{temp=ma; ma=mb; mb=temp;} ma=ma.split(' ');
mb=mb.split(' ');
s=""; s1=" ";  flag=true; for (i=0; i<ma.length; i++)
{flag=true; mai=ma[i];
for(j=0; j<mb.length; j++) if(mai==mb[j])
{s+=mai+" "; flag=false; break;}
if(flag) s1+=mai+" "; } if(n==0) return s; return s1;}
