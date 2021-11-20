import pandas as pd
import pickle

df = pd.read_csv('test.csv')
df.dropna(inplace = True)

print('nb')
clf_nb = pickle.load(open('model_nb.sav', 'rb'))
pred_clf_nb = clf_nb.predict(df)
print(pred_clf_nb[0])

print('knn')
clf_knn = pickle.load(open('model_knn.sav', 'rb'))
pred_clf_knn = clf_knn.predict(df)
print(pred_clf_knn[0])

print('dt')
clf_dt = pickle.load(open('model_dt.sav', 'rb'))
pred_clf_dt = clf_dt.predict(df)
print(pred_clf_dt[0])